<?php
/* @var $this VentaController */
/* @var $model Venta */
/* @var $form CActiveForm */
?>

<div class="form">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'venta-form',
        // Please note: When you enable ajax validation, make sure the corresponding
        // controller action is handling ajax validation correctly.
        // There is a call to performAjaxValidation() commented in generated controller code.
        // See class documentation of CActiveForm for details on this.
        'enableAjaxValidation' => false,
    ));
    ?>

    <p class="note">Los campos marcados con un  <span class="required">*</span> son obligatorios.</p>


    <?php echo $form->errorSummary($model); ?>

    <div class="row">
        <?php echo $form->labelEx($model, 'nombre'); ?>
        <?php echo $form->textField($model, 'nombre', array('size' => 45, 'maxlength' => 45)); ?>
        <?php echo $form->error($model, 'nombre'); ?>
    </div>
    <div class="row">
        <?php echo $form->labelEx($model, 'cedula'); ?>
        <?php echo $form->textField($model, 'cedula', array('size' => 45, 'maxlength' => 45)); ?>
        <?php echo $form->error($model, 'cedula'); ?>
    </div>
    <div class="row">
        <?php echo $form->labelEx($model, 'fecha'); ?>
        <?php echo $form->textField($model, 'fecha', array('size' => 45, 'maxlength' => 45)); ?>
        <?php echo $form->error($model, 'fecha'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'hora'); ?>
        <?php echo $form->textField($model, 'hora', array('size' => 45, 'maxlength' => 45)); ?>
        <?php echo $form->error($model, 'hora'); ?>
    </div>
    
    <div class="row">
        <?php echo $form->labelEx($model, 'cantidad'); ?>
        <?php echo $form->textField($model, 'cantidad', array('size' => 45, 'maxlength' => 45)); ?>
        <?php echo $form->error($model, 'cantidad'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'total'); ?>
        <?php echo $form->textField($model, 'total'); ?>
        <?php echo $form->error($model, 'total'); ?>
    </div>

<!--    <div class="row">
        <?php //echo $form->labelEx($model, 'idcajero'); ?>
        <?php //echo $form->textField($model, 'idcajero'); ?>
        <?php //echo $form->error($model, 'idcajero'); ?>
    </div>-->

    <div class="row buttons">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Guardar' : 'Guardar'); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->
