<?php
/* @var $this CancelacionController */
/* @var $model Cancelacion */

$this->breadcrumbs=array(
	'Cancelacions'=>array('index'),
	$model->idcancelacion,
);

$this->menu=array(
	array('label'=>'List Cancelacion', 'url'=>array('index')),
	array('label'=>'Create Cancelacion', 'url'=>array('create')),
	array('label'=>'Update Cancelacion', 'url'=>array('update', 'id'=>$model->idcancelacion)),
	array('label'=>'Delete Cancelacion', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idcancelacion),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Cancelacion', 'url'=>array('admin')),
);
?>

<h1>View Cancelacion #<?php echo $model->idcancelacion; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idcancelacion',
		'fecha',
		'hora',
		'idcliente',
		'idcompra',
	),
)); ?>
