<?php
/* @var $this CancelacionController */
/* @var $model Cancelacion */

$this->breadcrumbs=array(
	'Cancelacions'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Cancelacion', 'url'=>array('index')),
	array('label'=>'Manage Cancelacion', 'url'=>array('admin')),
);
?>

<h1>Create Cancelacion</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>