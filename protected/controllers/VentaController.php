<?php

class VentaController extends Controller {

    /**
     * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
     * using two-column layout. See 'protected/views/layouts/column2.php'.
     */
    public $layout = '//layouts/column1_cajero';

    /**
     * @return array action filters
     */
    public function filters() {
        return array(
            'accessControl', // perform access control for CRUD operations
            'postOnly + delete', // we only allow deletion via POST request
        );
    }

    /**
     * Specifies the access control rules.
     * This method is used by the 'accessControl' filter.
     * @return array access control rules
     */
    public function accessRules() {
        return array(
            array('allow', // allow all users to perform 'index' and 'view' actions
                'actions' => array('index', 'view'),
                'users' => array('*'),
            ),
            array('allow', // allow authenticated user to perform 'create' and 'update' actions
                'actions' => array('create', 'update'),
                'users' => array('@'),
            ),
            array('allow', // allow admin user to perform 'admin' and 'delete' actions
                'actions' => array('admin','datos','pdf', 'delete','vender','crear','disponibles'),
                'users' => array('@'),
            ),
            array('deny', // deny all users
                'users' => array('*'),
            ),
        );
    }

    /**
     * Displays a particular model.
     * @param integer $id the ID of the model to be displayed
     */
    public function actionView($id) {
        $this->render('view', array(
            'model' => $this->loadModel($id),
        ));
    }

     
    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
       public function actionCrear($id) {
        $this->layout = '//layouts/column1_cajero';
        Yii::app()->session['idcatalogo_ruta'] = $id;
        $modelhorario = new HorarioViaje('search');
        $modelhorario->unsetAttributes();
        $model = new CatalogoRuta('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['Venta']))
            $model->attributes = $_GET['Venta'];
        $bandera = 1;
        $this->render('crearventa', array(
            'bandera' => $bandera,
            'model' => $model,
            'modelhorario' => $modelhorario
        ));
    }

    public function actionDisponibles($id) {
        $this->layout = '//layouts/column1_cajero';
        $trasporte = UnidadTransporte::model()->findAll('idhorario_viaje=' . $id);
        $cantidad_buses = count($trasporte);
        if($cantidad_buses!=0){
                 Yii::app()->session['idtransporte'] =$trasporte[0]['idunidad_transaporte'];
        }else{
                 Yii::app()->session['idtransporte'] =-1;

        }

    
     //     $cantidadu = count($trasporte);

       // $boletos_cant= Boleto::model()->findAll('estado="disponible"');
        $boletos_cant= Boleto::model()->findByAttributes(array('estado'=>'disponible','transaporte'=> Yii::app()->session['idtransporte']));
        $cantidad_disponible = count($boletos_cant);
        echo $cantidad_disponible;
        $boletos = new Boleto('search');
        $cantidad = count($boletos);
        Yii::app()->session['idhorario'] = $id;
        $modelhorario = new HorarioViaje('search');
        $modelhorario->unsetAttributes();

        // $modelboleto = new Boleto('search');
        $model = new CatalogoRuta('search');
        $model->unsetAttributes();  // clear any default values

        if (isset($_GET['Venta']))
            $model->attributes = $_GET['Venta'];


        if ($cantidad_disponible != 0) {

            $bandera = 2;
            $boletos->unsetAttributes();


            $this->render('crearventa', array(
                'bandera' => $bandera,
                'model' => $model,
                'boletos' => $boletos,
                'modelhorario' => $modelhorario,
            ));
        } else {
            Yii::app()->user->setFlash('error', "Lo sentimos, ya no hay boletos disponibles en este horario");

            $bandera = 1;
            $this->render('crearventa', array(
                'bandera' => $bandera,
                'model' => $model,
                'modelhorario' => $modelhorario,
            ));
        }
    }

    public function actionVender($id) {

        $modelboleto = Boleto::model()->findByPk($id);
        $modelboleto->estado = 'ocupado';

        $model = new Venta;
        $ruta = CatalogoRuta::model()->find('idcatalogo_ruta=' . Yii::app()->session['idcatalogo_ruta']);

        // if (isset($_POST['Compra'])) {
        $model->cantidad = 1;
        $model->total = $ruta->costo;
        $model->fecha = date('Y-m-d');
        $model->hora = date('H:i:s');
        $model->estado='activo';
//        $model->nombre='Fabricio';
//        $model->cedula='1105012866';
        $model->idboleto=$id;
        //$model->estado = "pendiente";
        $model->idcajero = Yii::app()->session['id'];
        Yii::app()->user->setFlash('success',"El proceso fue realizado correctamente.");
         $modeldatos= $this->actionDatos();
         $model->nombre=$modeldatos->nombre;
         $model->cedula=$modeldatos->cedula;
        if ($model->save() && $modelboleto->save())
            $this->actionAdmin();
        //   $this->redirect(array('view', 'id' => $model->idcompra));
        // }
    }
    
    public function actionDatos() {
        $model= new Venta;

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);
        if (isset($_POST['Venta'])) {
            $model->attributes = $_POST['Venta'];
            return $model;

          //   $model->idcatalogo_ruta=Yii::app()->session['idcatalogo_ruta'];
//               $this->redirect(array('admin', 'id' => Yii::app()->session['idcatalogo_ruta']));
        }

        $this->render('create', array(
            'model' => $model,
        ));
    }
    public function actionCreate() {
         $this->layout = '//layouts/column1_cajero';

        $model = new CatalogoRuta('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['Venta']))
            $model->attributes = $_GET['Venta'];
        $bandera = 0;
        $this->render('crearventa', array(
            'model' => $model,
            'bandera' => $bandera,
        ));

       // $model = new Venta;

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);
//
//        if (isset($_POST['Venta'])) {
//            $model->attributes = $_POST['Venta'];
//            $model->idcajero=Yii::app()->session['id'];
//            if ($model->save())
//                $this->redirect(array('admin', 'id' => $model->idventa));
//        }
//
//        $this->render('create', array(
//            'model' => $model,
//        ));
    }

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     */
    public function actionUpdate($id) {
        $model = $this->loadModel($id);

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['Venta'])) {
            $model->attributes = $_POST['Venta'];
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->idventa));
        }

        $this->render('update', array(
            'model' => $model,
        ));
    }

    /**
     * Deletes a particular model.
     * If deletion is successful, the browser will be redirected to the 'admin' page.
     * @param integer $id the ID of the model to be deleted
     */
    public function actionDelete($id) {
          $model = $this->loadModel($id);

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

       // if (isset($_POST['Venta'])) {
        //    $model->attributes = $_POST['Venta'];
            $model->estado='desactivo';
            $model->save();
         //   if ($model->save())
                $this->redirect(array('view', 'id' => $model->idventa));
       // }

       // $this->render('update', array(
       //     'model' => $model,
       // ));
//        $this->loadModel($id)->delete();
//
//        // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
//        if (!isset($_GET['ajax']))
//            $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
    }

    /**
     * Lists all models.
     */
    public function actionIndex() {
        $dataProvider = new CActiveDataProvider('Venta');
        $this->render('index', array(
            'dataProvider' => $dataProvider,
        ));
    }
     public function actionPdf($id) {
        
        $this->render('pdf', array(
            'model' => $this->loadModel($id),
        ));
    }

    /**
     * Manages all models.
     */
    public function actionAdmin() {
        $model = new Venta('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['Venta']))
            $model->attributes = $_GET['Venta'];

        $this->render('admin', array(
            'model' => $model,
        ));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer $id the ID of the model to be loaded
     * @return Venta the loaded model
     * @throws CHttpException
     */
    public function loadModel($id) {
        $model = Venta::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'La página solicitada no existe.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param Venta $model the model to be validated
     */
    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'venta-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

}
