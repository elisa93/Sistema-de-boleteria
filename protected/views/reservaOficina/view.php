<?php
/* @var $this ReservaOficinaController */
/* @var $model ReservaOficina */

$this->breadcrumbs=array(
	'Reserva Oficinas'=>array('index'),
	$model->idreserva_oficina,
);

$this->menu=array(
	array('label'=>'List ReservaOficina', 'url'=>array('index')),
	array('label'=>'Create ReservaOficina', 'url'=>array('create')),
	array('label'=>'Update ReservaOficina', 'url'=>array('update', 'id'=>$model->idreserva_oficina)),
	array('label'=>'Delete ReservaOficina', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idreserva_oficina),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ReservaOficina', 'url'=>array('admin')),
);
?>

<h1>View ReservaOficina #<?php echo $model->idreserva_oficina; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idreserva_oficina',
		'fecha',
		'hora',
		'total',
		'idcajero',
	),
)); ?>
