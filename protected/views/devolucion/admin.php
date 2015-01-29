<?php
/* @var $this DevolucionController */
/* @var $model Devolucion */

$this->breadcrumbs = array(
    //'Devoluciones' => array('admin'),
    'Devoluciones',
   // 'Manage',
);
//
//$this->menu = array(
//    array('label' => 'List Devolucion', 'url' => array('index')),
//    array('label' => 'Create Devolucion', 'url' => array('create')),
//);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#devolucion-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Lista de Devoluciones</h1>



<?php echo CHtml::link('Busqueda Avanzada', '#', array('class' => 'search-button')); ?>
<div class="search-form" style="display:none">
    <?php
    $this->renderPartial('_search', array(
        'model' => $model,
    ));
    ?>
</div><!-- search-form -->

<?php
$this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'devolucion-grid',
    'dataProvider' => $model->search(),
    'filter' => $model,
    'columns' => array(
        //'iddevolucion',
        'fecha',
        'hora',
        //'idcajero',
        //'venta_idventa',
        array(
            'class' => 'CButtonColumn',
        ),
    ),
));
?>

<?php
    $this->widget('zii.widgets.CMenu', array(
        'items' => array(
            array('label' => 'Nueva Devolucion','url' => array('/Devolucion/create')),
        ),
    ));
    ?>