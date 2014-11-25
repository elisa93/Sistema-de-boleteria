<?php
/* @var $this CambioBoletoController */
/* @var $data CambioBoleto */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idcambio_boleto')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idcambio_boleto), array('view', 'id'=>$data->idcambio_boleto)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha')); ?>:</b>
	<?php echo CHtml::encode($data->fecha); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hora')); ?>:</b>
	<?php echo CHtml::encode($data->hora); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('total_anterior')); ?>:</b>
	<?php echo CHtml::encode($data->total_anterior); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('total_nuevo')); ?>:</b>
	<?php echo CHtml::encode($data->total_nuevo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idcajero')); ?>:</b>
	<?php echo CHtml::encode($data->idcajero); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idventa')); ?>:</b>
	<?php echo CHtml::encode($data->idventa); ?>
	<br />


</div>