<?php
/* @var $this HorarioViajeController */
/* @var $data HorarioViaje */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idhorario_viaje')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idhorario_viaje), array('view', 'id'=>$data->idhorario_viaje)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hora_salida')); ?>:</b>
	<?php echo CHtml::encode($data->hora_salida); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hora_llegada')); ?>:</b>
	<?php echo CHtml::encode($data->hora_llegada); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idcatalogo_ruta')); ?>:</b>
	<?php echo CHtml::encode($data->idcatalogo_ruta); ?>
	<br />


</div>