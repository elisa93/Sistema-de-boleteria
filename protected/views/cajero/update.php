<?php
/* @var $this CajeroController */
/* @var $model Cajero */

$this->breadcrumbs=array(
	'Cajeros'=>array('index'),
	$model->idcajero=>array('view','id'=>$model->idcajero),
	'Update',
);

$this->menu=array(
	array('label'=>'List Cajero', 'url'=>array('index')),
	array('label'=>'Create Cajero', 'url'=>array('create')),
	array('label'=>'View Cajero', 'url'=>array('view', 'id'=>$model->idcajero)),
	array('label'=>'Manage Cajero', 'url'=>array('admin')),
);
?>

<h1>Update Cajero <?php echo $model->idcajero; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>