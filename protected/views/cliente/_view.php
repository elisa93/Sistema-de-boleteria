<?php
/* @var $this ClienteController */
/* @var $data Cliente */
?>

<div class="view">

    <b><?php echo CHtml::encode($data->getAttributeLabel('idusuario')); ?>:</b>
    <?php echo CHtml::link(CHtml::encode($data->idusuario), array('view', 'id' => $data->idusuario)); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
    <?php echo CHtml::encode($data->email); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('cedula')); ?>:</b>
    <?php echo CHtml::encode($data->cedula); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
    <?php echo CHtml::encode($data->nombre); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('telefono')); ?>:</b>
    <?php echo CHtml::encode($data->telefono); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('direccion')); ?>:</b>
    <?php echo CHtml::encode($data->direccion); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('password')); ?>:</b>
    <?php echo CHtml::encode($data->password); ?>
    <br />

    <?php /*
      <b><?php echo CHtml::encode($data->getAttributeLabel('estado')); ?>:</b>
      <?php echo CHtml::encode($data->estado); ?>
      <br />

     */ ?>

</div>