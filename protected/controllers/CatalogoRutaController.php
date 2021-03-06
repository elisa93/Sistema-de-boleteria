<?php

class CatalogoRutaController extends Controller {

    /**
     * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
     * using two-column layout. See 'protected/views/layouts/column2.php'.
     */
    public $layout = '//layouts/column1_administrador';

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
                'actions' => array('admin','adminCliente', 'delete'),
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
        $this->redirect(array('HorarioViaje/admin','id'=>$id));
        
//       $this->render('view', array(
//            'model' => $this->loadModel($id),
//        ));
    }

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate() {
        $model = new CatalogoRuta;

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);
        echo Yii::app()->session['id'];
        if (isset($_POST['CatalogoRuta'])) {
            $model->attributes = $_POST['CatalogoRuta'];
            $model->idadministrador=Yii::app()->session['id'];
            if ($model->save())
             //   $this->actionAdmin ();
        $this->redirect(array('CatalogoRuta/admin','id'=>Yii::app()->session['id']));
        }

        $this->render('create', array(
            'model' => $model,
        ));
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

        if (isset($_POST['CatalogoRuta'])) {
            $model->attributes = $_POST['CatalogoRuta'];
            if ($model->save())
                $this->actionAdmin ();
             //   $this->redirect(array('view', 'id' => $model->idcatalogo_ruta));
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
        $this->loadModel($id)->delete();

        // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
        if (!isset($_GET['ajax']))
            $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
    }

    /**
     * Lists all models.
     */
    public function actionIndex() {
        $dataProvider = new CActiveDataProvider('CatalogoRuta');
        $this->render('index', array(
            'dataProvider' => $dataProvider,
        ));
    }

    /**
     * Manages all models.
     */
    public function actionAdmin() {
        $model = new CatalogoRuta('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['CatalogoRuta']))
            $model->attributes = $_GET['CatalogoRuta'];

        $this->render('admin', array(
            'model' => $model,
        ));
    }
    public function actionAdminCliente() {
                $this->layout = '//layouts/column1';

        $model = new CatalogoRuta('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['CatalogoRuta']))
            $model->attributes = $_GET['CatalogoRuta'];

        $this->render('adminCliente', array(
            'model' => $model,
        ));
    }


    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer $id the ID of the model to be loaded
     * @return CatalogoRuta the loaded model
     * @throws CHttpException
     */
    public function loadModel($id) {
        $model = CatalogoRuta::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'La página solicitada no existe.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param CatalogoRuta $model the model to be validated
     */
    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'catalogo-ruta-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

}
