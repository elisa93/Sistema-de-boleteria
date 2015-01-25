<?php
/* @var $this UnidadTransporteController */
/* @var $model UnidadTransporte */
/* @var $form CActiveForm */
?>

<div class="wide form">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'action' => Yii::app()->createUrl($this->route),
        'method' => 'get',
    ));
    ?>

    <div class="row">
        <?php echo $form->label($model, 'idunidad_transaporte'); ?>
        <?php echo $form->textField($model, 'idunidad_transaporte'); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model, 'placa'); ?>
        <?php echo $form->textField($model, 'placa', array('size' => 45, 'maxlength' => 45)); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model, 'numero_unidad'); ?>
        <?php echo $form->textField($model, 'numero_unidad', array('size' => 45, 'maxlength' => 45)); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model, 'capacidad'); ?>
        <?php echo $form->textField($model, 'capacidad', array('size' => 45, 'maxlength' => 45)); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model, 'estado'); ?>
        <?php echo $form->textField($model, 'estado', array('size' => 45, 'maxlength' => 45)); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model, 'idhorario_viaje'); ?>
        <?php echo $form->textField($model, 'idhorario_viaje'); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model, 'idadministrador'); ?>
        <?php echo $form->textField($model, 'idadministrador'); ?>
    </div>

    <div class="row buttons">
        <?php echo CHtml::submitButton('Search'); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- search-form -->