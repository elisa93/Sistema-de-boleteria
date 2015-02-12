<?php
/* @var $this UnidadTransporteController */
/* @var $model UnidadTransporte */

$this->breadcrumbs = array(
    'Administración de unidades de trasnporte' => array('admin'),
//    'Administrar',
);

//$this->menu = array(
//    array('label' => 'Lista de U. de Transporte', 'url' => array('index')),
//    array('label' => 'Registrar nueva U. de transporte', 'url' => array('create')),
//);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#unidad-transporte-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administración de Unidades de Transporte</h1>


<?php echo CHtml::link('Busqueda avanzada', '#', array('class' => 'search-button')); ?>
<div class="search-form" style="display:none">
    <?php
    $this->renderPartial('_search', array(
        'model' => $model,
    ));
    ?>
</div><!-- search-form -->

<?php
$this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'unidad-transporte-grid',
    'dataProvider' => $model->search(),
    'filter' => $model,
    'columns' => array(
      //  'idunidad_transaporte',
        'placa',
        'numero_unidad',
        'capacidad',
        'estado',
      //  'idhorario_viaje',
        /*
          'idadministrador',
         */
        array(
            'class' => 'CButtonColumn',
             'header'=>'Operationes',
            'template'=>'{generar} {view} {update} {delete}',
            'buttons'=>array
            (
                'generar' => array
                (
                    'label'=>'Generar',
                 // 'url'=>'CController::createUrl(/HorarioViaje/index)'
                  'url'=>'CController::createUrl("/UnidadTransporte/generarBoletos", array("id"=>$data->idunidad_transaporte))'
                    //   'imageUrl'=>Yii::app()->request->baseUrl.'/images/email.png',
                 //   'url'=>'Yii::app()->createUrl("users/email", array("id"=>$data->id))',
                ),
              
            ),
        ),
    ),
));
?>
<?php
    $this->widget('zii.widgets.CMenu', array(
        'items' => array(
            array('label' => 'Registrar nueva unidad de transporte','url' => array('/UnidadTransporte/create')),
        ),
    ));
    ?>