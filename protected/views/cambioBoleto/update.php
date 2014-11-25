<?php
/* @var $this CambioBoletoController */
/* @var $model CambioBoleto */

$this->breadcrumbs=array(
	'Cambio Boletos'=>array('index'),
	$model->idcambio_boleto=>array('view','id'=>$model->idcambio_boleto),
	'Update',
);

$this->menu=array(
	array('label'=>'List CambioBoleto', 'url'=>array('index')),
	array('label'=>'Create CambioBoleto', 'url'=>array('create')),
	array('label'=>'View CambioBoleto', 'url'=>array('view', 'id'=>$model->idcambio_boleto)),
	array('label'=>'Manage CambioBoleto', 'url'=>array('admin')),
);
?>

<h1>Update CambioBoleto <?php echo $model->idcambio_boleto; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>