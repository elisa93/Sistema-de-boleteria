<?php
/* @var $this CompraController */
/* @var $data Compra */
?>

<div class="view">

    <b><?php echo CHtml::encode($data->getAttributeLabel('idcompra')); ?>:</b>
    <?php echo CHtml::link(CHtml::encode($data->idcompra), array('view', 'id' => $data->idcompra)); ?>
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

    <b><?php echo CHtml::encode($data->getAttributeLabel('estado')); ?>:</b>
    <?php echo CHtml::encode($data->estado); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('idcliente')); ?>:</b>
    <?php echo CHtml::encode($data->idcliente); ?>
    <br />


</div>