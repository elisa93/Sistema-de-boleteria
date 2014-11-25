<?php
/* @var $this HorarioViajeController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Horario Viajes',
);

$this->menu=array(
	array('label'=>'Create HorarioViaje', 'url'=>array('create')),
	array('label'=>'Manage HorarioViaje', 'url'=>array('admin')),
);
?>

<h1>Horario Viajes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
