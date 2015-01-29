<?php
/* @var $this CompraController */
/* @var $model Compra */

$this->breadcrumbs = array(
    'Compras' => array('Compra/admin'),
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
	$('#compra-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>


<?php
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
            'header'=>'Operations',
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
//        array(
//            'class' => 'CButtonColumn',
//        ),
    ),
));
}
?>