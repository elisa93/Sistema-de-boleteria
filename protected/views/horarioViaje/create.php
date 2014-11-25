<?php
/* @var $this HorarioViajeController */
/* @var $model HorarioViaje */

$this->breadcrumbs=array(
	'Horario Viajes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List HorarioViaje', 'url'=>array('index')),
	array('label'=>'Manage HorarioViaje', 'url'=>array('admin')),
);
?>

<h1>Create HorarioViaje</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>