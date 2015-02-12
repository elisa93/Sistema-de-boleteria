<?php
/* @var $this CompraController */
/* @var $model Compra */

$this->breadcrumbs = array(
    'Compras' => array('Compra/admin'),'Nueva Compra'
);

//$this->menu = array(
//    array('label' => 'Lista Compras', 'url' => array('index')),
//    array('label' => 'Crear Compra', 'url' => array('create')),
//);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#catalogo-ruta-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>
<?php echo CHtml::link('Busqueda  avanzada', '#', array('class' => 'search-button')); ?>
<div class="search-form" style="display:none">
    <?php
    $this->renderPartial('_searchRuta', array(
        'model' => $model,
    ));
    ?>
</div><!-- search-form -->
<?php
//Yii::app()->user->setFlash('success', "Data1 saved!");
//Yii::app()->user->setFlash('notice', "Data3 ignored.");
//Yii::app()->user->setFlash('success',"El proceso fue realizado correctamente.");
foreach(Yii::app()->user->getFlashes() as $key => $message) {
        echo '<div class="flash-' . $key . '">' . $message . "</div>\n";
    }
$this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'catalogo-ruta-grid',
    'dataProvider' => $model->search_cliente(),
    'filter' => $model,
    'columns' => array(  
        'ciudad_origen',
        'ciudad_destino',
        'costo',
                array(
            'class' => 'CButtonColumn',
            'header'=>'Operationes',
            'template'=>'{ver}',
            'buttons'=>array
            (
                'ver' => array
                (
                    'label'=>'ver horarios',
                 // 'url'=>'CController::createUrl(/HorarioViaje/index)'
                    'url'=>'CController::createUrl("/compra/crear", array("id"=>$data->idcatalogo_ruta))'
                    //   'imageUrl'=>Yii::app()->request->baseUrl.'/images/email.png',
                 //   'url'=>'Yii::app()->createUrl("users/email", array("id"=>$data->id))',
                ),
              
            ),
        ),
    ),
));
?>

<?php
if($bandera==1){
    echo "<h1>Lista de Horario</h1>";
$this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'horario-viaje-grid',
    'dataProvider' => $modelhorario->search(),
    'filter' => $modelhorario,
    'columns' => array(
  //      'idhorario_viaje',
        'hora_salida',
        'hora_llegada',
 //       'idcatalogo_ruta',
        array(
            'class' => 'CButtonColumn',
            'header'=>'Operations',
            'template'=>'{ver}',
            'buttons'=>array
            (
                'ver' => array
                (
                    'label'=>'ver disponibles',
                 // 'url'=>'CController::createUrl(/HorarioViaje/index)'
                    'url'=>'CController::createUrl("/compra/disponibles", array("id"=>$data->idhorario_viaje))'
                    //   'imageUrl'=>Yii::app()->request->baseUrl.'/images/email.png',
                 //   'url'=>'Yii::app()->createUrl("users/email", array("id"=>$data->id))',
                ),
              
            ),
        ),
    ),
));
}
if($bandera==2){
    echo "<h1>Lista de Horario</h1>";
$this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'horario-viaje-grid',
    'dataProvider' => $modelhorario->search(),
    'filter' => $modelhorario,
    'columns' => array(
  //      'idhorario_viaje',
        'hora_salida',
        'hora_llegada',
 //       'idcatalogo_ruta',
        array(
            'class' => 'CButtonColumn',
            'header'=>'Operations',
            'template'=>'{ver}',
            'buttons'=>array
            (
                'ver' => array
                (
                    'label'=>'ver disponibles',
                 // 'url'=>'CController::createUrl(/HorarioViaje/index)'
                    'url'=>'CController::createUrl("/compra/disponibles", array("id"=>$data->idhorario_viaje))'
                    //   'imageUrl'=>Yii::app()->request->baseUrl.'/images/email.png',
                 //   'url'=>'Yii::app()->createUrl("users/email", array("id"=>$data->id))',
                ),
              
            ),
        ),
    ),
));
     $this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'boleto-grid',
    'dataProvider' => $boletos->search(),
    'filter' => $boletos,
    'columns' => array(
       // 'idboleto',
        'numero_boleto',
        'tipo',
        'estado',
      //  'transaporte',
      //  'idventa',
        /*
          'idreserva_oficina',
          'idcompra',
          'idreserva',
         */
        array(
            'class' => 'CButtonColumn',
            'header'=>'Operations',
            'template'=>'{ver}',
            'buttons'=>array
            (
                'ver' => array
                (
                    'label'=>'Comprar',
                 // 'url'=>'CController::createUrl(/HorarioViaje/index)'
                    'url'=>'CController::createUrl("/compra/comprar", array("id"=>$data->idboleto))'
                    //   'imageUrl'=>Yii::app()->request->baseUrl.'/images/email.png',
                 //   'url'=>'Yii::app()->createUrl("users/email", array("id"=>$data->id))',
                ),
              
            ),
        ),
    ),
));
}

?>
