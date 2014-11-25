<?php
/* @var $this BoletoController */
/* @var $model Boleto */

$this->breadcrumbs=array(
	'Boletos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Boleto', 'url'=>array('index')),
	array('label'=>'Manage Boleto', 'url'=>array('admin')),
);
?>

<h1>Create Boleto</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>