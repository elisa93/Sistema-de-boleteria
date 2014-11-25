<?php
/* @var $this HorarioViajeController */
/* @var $model HorarioViaje */

$this->breadcrumbs=array(
	'Horario Viajes'=>array('index'),
	$model->idhorario_viaje,
);

$this->menu=array(
	array('label'=>'List HorarioViaje', 'url'=>array('index')),
	array('label'=>'Create HorarioViaje', 'url'=>array('create')),
	array('label'=>'Update HorarioViaje', 'url'=>array('update', 'id'=>$model->idhorario_viaje)),
	array('label'=>'Delete HorarioViaje', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idhorario_viaje),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage HorarioViaje', 'url'=>array('admin')),
);
?>

<h1>View HorarioViaje #<?php echo $model->idhorario_viaje; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idhorario_viaje',
		'hora_salida',
		'hora_llegada',
		'idcatalogo_ruta',
	),
)); ?>
