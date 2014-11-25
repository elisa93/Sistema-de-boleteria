<?php
/* @var $this ReservaOficinaController */
/* @var $model ReservaOficina */

$this->breadcrumbs=array(
	'Reserva Oficinas'=>array('index'),
	$model->idreserva_oficina=>array('view','id'=>$model->idreserva_oficina),
	'Update',
);

$this->menu=array(
	array('label'=>'List ReservaOficina', 'url'=>array('index')),
	array('label'=>'Create ReservaOficina', 'url'=>array('create')),
	array('label'=>'View ReservaOficina', 'url'=>array('view', 'id'=>$model->idreserva_oficina)),
	array('label'=>'Manage ReservaOficina', 'url'=>array('admin')),
);
?>

<h1>Update ReservaOficina <?php echo $model->idreserva_oficina; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>