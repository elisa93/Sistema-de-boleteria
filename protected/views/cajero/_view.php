<?php
/* @var $this CajeroController */
/* @var $data Cajero */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idcajero')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idcajero), array('view', 'id'=>$data->idcajero)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('password')); ?>:</b>
	<?php echo CHtml::encode($data->password); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('estado')); ?>:</b>
	<?php echo CHtml::encode($data->estado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idadministrador')); ?>:</b>
	<?php echo CHtml::encode($data->idadministrador); ?>
	<br />


</div>