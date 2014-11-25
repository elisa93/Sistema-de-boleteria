<?php
/* @var $this UnidadTransporteController */
/* @var $model UnidadTransporte */

$this->breadcrumbs=array(
	'Unidad Transportes'=>array('index'),
	$model->idunidad_transaporte,
);

$this->menu=array(
	array('label'=>'List UnidadTransporte', 'url'=>array('index')),
	array('label'=>'Create UnidadTransporte', 'url'=>array('create')),
	array('label'=>'Update UnidadTransporte', 'url'=>array('update', 'id'=>$model->idunidad_transaporte)),
	array('label'=>'Delete UnidadTransporte', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idunidad_transaporte),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage UnidadTransporte', 'url'=>array('admin')),
);
?>

<h1>View UnidadTransporte #<?php echo $model->idunidad_transaporte; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idunidad_transaporte',
		'placa',
		'numero_unidad',
		'capacidad',
		'estado',
		'idhorario_viaje',
		'idadministrador',
	),
)); ?>
