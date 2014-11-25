<?php
/* @var $this HorarioViajeController */
/* @var $model HorarioViaje */

$this->breadcrumbs=array(
	'Horario Viajes'=>array('index'),
	$model->idhorario_viaje=>array('view','id'=>$model->idhorario_viaje),
	'Update',
);

$this->menu=array(
	array('label'=>'List HorarioViaje', 'url'=>array('index')),
	array('label'=>'Create HorarioViaje', 'url'=>array('create')),
	array('label'=>'View HorarioViaje', 'url'=>array('view', 'id'=>$model->idhorario_viaje)),
	array('label'=>'Manage HorarioViaje', 'url'=>array('admin')),
);
?>

<h1>Update HorarioViaje <?php echo $model->idhorario_viaje; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>