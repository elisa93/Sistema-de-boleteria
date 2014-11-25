<?php
/* @var $this CancelacionController */
/* @var $data Cancelacion */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idcancelacion')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idcancelacion), array('view', 'id'=>$data->idcancelacion)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha')); ?>:</b>
	<?php echo CHtml::encode($data->fecha); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hora')); ?>:</b>
	<?php echo CHtml::encode($data->hora); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idcliente')); ?>:</b>
	<?php echo CHtml::encode($data->idcliente); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idcompra')); ?>:</b>
	<?php echo CHtml::encode($data->idcompra); ?>
	<br />


</div>