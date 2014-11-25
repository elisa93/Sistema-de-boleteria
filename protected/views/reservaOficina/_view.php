<?php
/* @var $this ReservaOficinaController */
/* @var $data ReservaOficina */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idreserva_oficina')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idreserva_oficina), array('view', 'id'=>$data->idreserva_oficina)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha')); ?>:</b>
	<?php echo CHtml::encode($data->fecha); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hora')); ?>:</b>
	<?php echo CHtml::encode($data->hora); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('total')); ?>:</b>
	<?php echo CHtml::encode($data->total); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idcajero')); ?>:</b>
	<?php echo CHtml::encode($data->idcajero); ?>
	<br />


</div>