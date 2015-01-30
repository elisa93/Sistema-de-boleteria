<?php
/* @var $this CatalogoRutaController */
/* @var $model CatalogoRuta */

$this->breadcrumbs = array(
    'Administración de rutas' => array('admin'),
//    'Administrar',
);
//
//$this->menu = array(
//    array('label' => 'Lista de Rutas', 'url' => array('index')),
//    array('label' => 'Crear Nueva Ruta', 'url' => array('create')),
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

<h1>Administración de Rutas</h1>

<?php echo CHtml::link('Busqueda  avanzada', '#', array('class' => 'search-button')); ?>
<div class="search-form" style="display:none">
    <?php
    $this->renderPartial('_search', array(
        'model' => $model,
    ));
    ?>
</div><!-- search-form -->

<?php
$this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'catalogo-ruta-grid',
    'dataProvider' => $model->search(),
    'filter' => $model,
    'columns' => array(
       // 'idcatalogo_ruta',
        'ciudad_origen',
        'ciudad_destino',
        'costo',
      //  'idadministrador',
        array(
            'class' => 'CButtonColumn',
            'header'=>'Operationes',
            'template'=>'{ver}{update}{delete}',
            'buttons'=>array
            (
                'ver' => array
                (
                    'label'=>'Horario ',
                 // 'url'=>'CController::createUrl(/HorarioViaje/index)'
                    'url'=>'CController::createUrl("/catalogoRuta/view", array("id"=>$data->idcatalogo_ruta))'
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
            array('label' => 'Crear Nueva Ruta','url' => array('/CatalogoRuta/create')),
        ),
    ));
    ?>