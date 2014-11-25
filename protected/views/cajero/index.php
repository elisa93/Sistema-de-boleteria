<?php
/* @var $this CajeroController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Cajeros',
);

$this->menu=array(
	array('label'=>'Create Cajero', 'url'=>array('create')),
	array('label'=>'Manage Cajero', 'url'=>array('admin')),
);
?>

<h1>Cajeros</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
