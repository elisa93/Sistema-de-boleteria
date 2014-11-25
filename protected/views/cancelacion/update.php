<?php
/* @var $this CancelacionController */
/* @var $model Cancelacion */

$this->breadcrumbs=array(
	'Cancelacions'=>array('index'),
	$model->idcancelacion=>array('view','id'=>$model->idcancelacion),
	'Update',
);

$this->menu=array(
	array('label'=>'List Cancelacion', 'url'=>array('index')),
	array('label'=>'Create Cancelacion', 'url'=>array('create')),
	array('label'=>'View Cancelacion', 'url'=>array('view', 'id'=>$model->idcancelacion)),
	array('label'=>'Manage Cancelacion', 'url'=>array('admin')),
);
?>

<h1>Update Cancelacion <?php echo $model->idcancelacion; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>