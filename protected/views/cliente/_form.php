<?php
/* @var $this ClienteController */
/* @var $model Cliente */
/* @var $form CActiveForm */
?>

<div class="form">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'cliente-form',
        // Please note: When you enable ajax validation, make sure the corresponding
        // controller action is handling ajax validation correctly.
        // There is a call to performAjaxValidation() commented in generated controller code.
        // See class documentation of CActiveForm for details on this.
        'enableAjaxValidation' => false,
    ));
    ?>

    <p class="note">Los campos con un<span class="required">*</span> son requeridos .</p>

    <?php echo $form->errorSummary($model); ?>

    <div class="row">
        <?php echo $form->labelEx($model, 'email'); ?>
        <?php echo $form->textField($model, 'email', array('size' => 45, 'maxlength' => 45)); ?>
        <?php echo $form->error($model, 'email'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'cedula'); ?>
        <?php echo $form->textField($model, 'cedula', array('size' => 45, 'maxlength' => 45)); ?>
        <?php echo $form->error($model, 'cedula'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'nombre'); ?>
        <?php echo $form->textField($model, 'nombre', array('size' => 45, 'maxlength' => 45)); ?>
        <?php echo $form->error($model, 'nombre'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'telefono'); ?>
        <?php echo $form->textField($model, 'telefono', array('size' => 45, 'maxlength' => 45)); ?>
        <?php echo $form->error($model, 'telefono'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'direccion'); ?>
        <?php echo $form->textField($model, 'direccion', array('size' => 45, 'maxlength' => 45)); ?>
        <?php echo $form->error($model, 'direccion'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'password'); ?>
        <?php echo $form->passwordField($model, 'password', array('size' => 45, 'maxlength' => 45)); ?>
        <?php echo $form->error($model, 'password'); ?>
    </div>

<!--    <div class="row">
        <?php echo $form->labelEx($model, 'estado'); ?>
        <?php echo $form->textField($model, 'estado', array('size' => 45, 'maxlength' => 45)); ?>
        <?php echo $form->error($model, 'estado'); ?>
    </div>-->

    <div class="row buttons">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar'); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->