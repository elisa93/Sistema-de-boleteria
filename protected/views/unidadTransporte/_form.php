<?php
/* @var $this UnidadTransporteController */
/* @var $model UnidadTransporte */
/* @var $form CActiveForm */
?>

<div class="form">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'unidad-transporte-form',
        // Please note: When you enable ajax validation, make sure the corresponding
        // controller action is handling ajax validation correctly.
        // There is a call to performAjaxValidation() commented in generated controller code.
        // See class documentation of CActiveForm for details on this.
        'enableAjaxValidation' => false,
    ));
    ?>

    <p class="note">Todos los campos con <span class="required">*</span> son requeridos.</p>

    <?php echo $form->errorSummary($model); ?>

    <div class="row">
        <?php echo $form->labelEx($model, 'placa'); ?>
        <?php echo $form->textField($model, 'placa', array('size' => 45, 'maxlength' => 45)); ?>
        <?php echo $form->error($model, 'placa'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'numero_unidad'); ?>
        <?php echo $form->textField($model, 'numero_unidad', array('size' => 45, 'maxlength' => 45)); ?>
        <?php echo $form->error($model, 'numero_unidad'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'capacidad'); ?>
        <?php echo $form->textField($model, 'capacidad', array('size' => 45, 'maxlength' => 45)); ?>
        <?php echo $form->error($model, 'capacidad'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'estado'); ?>
        <?php echo $form->textField($model, 'estado', array('size' => 45, 'maxlength' => 45)); ?>
        <?php echo $form->error($model, 'estado'); ?>
    </div>

<!--    <div class="row">
        <?php // echo $form->labelEx($model, 'idhorario_viaje'); ?>
        <?php // echo $form->textField($model, 'idhorario_viaje'); ?>
        <?php // echo $form->error($model, 'idhorario_viaje'); ?>
    </div>-->

<!--    <div class="row">
        <?php // echo $form->labelEx($model, 'idadministrador'); ?>
        <?php // echo $form->textField($model, 'idadministrador'); ?>
        <?php // echo $form->error($model, 'idadministrador'); ?>
    </div>-->

    <div class="row buttons">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Registrar' : 'Guardar'); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->