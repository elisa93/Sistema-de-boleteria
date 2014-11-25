<?php
/* @var $this CambioBoletoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Cambio Boletos',
);

$this->menu=array(
	array('label'=>'Create CambioBoleto', 'url'=>array('create')),
	array('label'=>'Manage CambioBoleto', 'url'=>array('admin')),
);
?>

<h1>Cambio Boletos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
