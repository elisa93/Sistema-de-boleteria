<?php
/* @var $this HorarioViajeController */
/* @var $model HorarioViaje */
/* @var $form CActiveForm */
?>

<div class="form">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'horario-viaje-form',
        // Please note: When you enable ajax validation, make sure the corresponding
        // controller action is handling ajax validation correctly.
        // There is a call to performAjaxValidation() commented in generated controller code.
        // See class documentation of CActiveForm for details on this.
        'enableAjaxValidation' => false,
    ));
    ?>

    <p class="note">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($model); ?>

    <div class="row">
        <?php echo $form->labelEx($model, 'hora_salida'); ?>
        <?php echo $form->textField($model, 'hora_salida', array('size' => 45, 'maxlength' => 45)); ?>
        <?php echo $form->error($model, 'hora_salida'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'hora_llegada'); ?>
        <?php echo $form->textField($model, 'hora_llegada', array('size' => 45, 'maxlength' => 45)); ?>
        <?php echo $form->error($model, 'hora_llegada'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'idcatalogo_ruta'); ?>
        <?php echo $form->textField($model, 'idcatalogo_ruta'); ?>
        <?php echo $form->error($model, 'idcatalogo_ruta'); ?>
    </div>

    <div class="row buttons">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->