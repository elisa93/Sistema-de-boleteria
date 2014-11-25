<?php
/* @var $this BoletoController */
/* @var $model Boleto */

$this->breadcrumbs=array(
	'Boletos'=>array('index'),
	$model->idboleto=>array('view','id'=>$model->idboleto),
	'Update',
);

$this->menu=array(
	array('label'=>'List Boleto', 'url'=>array('index')),
	array('label'=>'Create Boleto', 'url'=>array('create')),
	array('label'=>'View Boleto', 'url'=>array('view', 'id'=>$model->idboleto)),
	array('label'=>'Manage Boleto', 'url'=>array('admin')),
);
?>

<h1>Update Boleto <?php echo $model->idboleto; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>