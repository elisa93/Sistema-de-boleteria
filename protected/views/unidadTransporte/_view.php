<?php
/* @var $this UnidadTransporteController */
/* @var $data UnidadTransporte */
?>

<div class="view">

    <b><?php echo CHtml::encode($data->getAttributeLabel('idunidad_transaporte')); ?>:</b>
    <?php echo CHtml::link(CHtml::encode($data->idunidad_transaporte), array('view', 'id' => $data->idunidad_transaporte)); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('placa')); ?>:</b>
    <?php echo CHtml::encode($data->placa); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('numero_unidad')); ?>:</b>
    <?php echo CHtml::encode($data->numero_unidad); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('capacidad')); ?>:</b>
    <?php echo CHtml::encode($data->capacidad); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('estado')); ?>:</b>
    <?php echo CHtml::encode($data->estado); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('idhorario_viaje')); ?>:</b>
    <?php echo CHtml::encode($data->idhorario_viaje); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('idadministrador')); ?>:</b>
    <?php echo CHtml::encode($data->idadministrador); ?>
    <br />


</div>