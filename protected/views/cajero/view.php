<?php
/* @var $this CajeroController */
/* @var $model Cajero */

$this->breadcrumbs=array(
	'Cajeros'=>array('index'),
	$model->idcajero,
);

$this->menu=array(
	array('label'=>'List Cajero', 'url'=>array('index')),
	array('label'=>'Create Cajero', 'url'=>array('create')),
	array('label'=>'Update Cajero', 'url'=>array('update', 'id'=>$model->idcajero)),
	array('label'=>'Delete Cajero', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idcajero),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Cajero', 'url'=>array('admin')),
);
?>

<h1> Cajero #<?php echo $model->idcajero; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
	//	'idcajero',
		'nombre',
		'email',
		'password',
		'estado',
	//	'idadministrador',
	),
)); ?>
