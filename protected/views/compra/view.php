<?php
/* @var $this CompraController */
/* @var $model Compra */

$this->breadcrumbs=array(
	'Compras'=>array('index'),
	$model->idcompra,
);

$this->menu=array(
	array('label'=>'Lista Compras', 'url'=>array('index')),
	array('label'=>'Crear Compra', 'url'=>array('create')),
	array('label'=>'Modificar Compra', 'url'=>array('update', 'id'=>$model->idcompra)),
	array('label'=>'Eliminar Compra', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idcompra),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Lista Compras', 'url'=>array('admin')),
);
?>

<h1>View Compra #<?php echo $model->idcompra; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idcompra',
		'fecha',
		'hora',
		'total',
		'estado',
		'idcliente',
	),
)); ?>
