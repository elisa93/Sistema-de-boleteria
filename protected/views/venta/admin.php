<?php
/* @var $this VentaController */
/* @var $model Venta */

$this->breadcrumbs = array(
  //  'Ventas' => array('admin'),
    'Ventas',
   // 'Manage',
);

//$this->menu = array(
//    array('label' => 'List Venta', 'url' => array('index')),
//    array('label' => 'Create Venta', 'url' => array('create')),
//);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#venta-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Lista de Ventas</h1>



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
    'id' => 'venta-grid',
    'dataProvider' => $model->search(),
    'filter' => $model,
    'columns' => array(
     //   'idventa',
        'fecha',
        'hora',
        'total',
       // 'idcajero',
        array(
            'class' => 'CButtonColumn',
        ),
    ),
));
?>
<?php
    $this->widget('zii.widgets.CMenu', array(
        'items' => array(
            array('label' => 'Nueva Venta','url' => array('/Venta/create')),
        ),
    ));
    ?>
