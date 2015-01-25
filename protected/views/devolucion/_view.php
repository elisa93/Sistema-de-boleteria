<?php
/* @var $this DevolucionController */
/* @var $data Devolucion */
?>

<div class="view">

    <b><?php echo CHtml::encode($data->getAttributeLabel('iddevolucion')); ?>:</b>
    <?php echo CHtml::link(CHtml::encode($data->iddevolucion), array('view', 'id' => $data->iddevolucion)); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('fecha')); ?>:</b>
    <?php echo CHtml::encode($data->fecha); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('hora')); ?>:</b>
    <?php echo CHtml::encode($data->hora); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('idcajero')); ?>:</b>
    <?php echo CHtml::encode($data->idcajero); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('venta_idventa')); ?>:</b>
    <?php echo CHtml::encode($data->venta_idventa); ?>
    <br />


</div>