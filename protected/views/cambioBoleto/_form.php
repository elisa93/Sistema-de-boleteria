<?php
/* @var $this CambioBoletoController */
/* @var $model CambioBoleto */
/* @var $form CActiveForm */
?>

<div class="form">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'cambio-boleto-form',
        // Please note: When you enable ajax validation, make sure the corresponding
        // controller action is handling ajax validation correctly.
        // There is a call to performAjaxValidation() commented in generated controller code.
        // See class documentation of CActiveForm for details on this.
        'enableAjaxValidation' => false,
    ));
    ?>

  <p class="note">Los campos marcados con un <span class="required">*</span> son requeridos.</p>


    <?php echo $form->errorSummary($model); ?>

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
        <?php echo $form->labelEx($model, 'total_anterior'); ?>
        <?php echo $form->textField($model, 'total_anterior'); ?>
        <?php echo $form->error($model, 'total_anterior'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'total_nuevo'); ?>
        <?php echo $form->textField($model, 'total_nuevo'); ?>
        <?php echo $form->error($model, 'total_nuevo'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'idcajero'); ?>
        <?php echo $form->textField($model, 'idcajero'); ?>
        <?php echo $form->error($model, 'idcajero'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'idventa'); ?>
        <?php echo $form->textField($model, 'idventa'); ?>
        <?php echo $form->error($model, 'idventa'); ?>
    </div>

    <div class="row buttons">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->