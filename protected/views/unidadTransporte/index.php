<?php
/* @var $this UnidadTransporteController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Unidad Transportes',
);

$this->menu=array(
	array('label'=>'Create UnidadTransporte', 'url'=>array('create')),
	array('label'=>'Manage UnidadTransporte', 'url'=>array('admin')),
);
?>

<h1>Unidad Transportes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
