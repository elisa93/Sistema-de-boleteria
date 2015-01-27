<?php
/* @var $this CajeroController */
/* @var $model Cajero */
/* @var $form CActiveForm */
?>

<div class="wide form">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'action' => Yii::app()->createUrl($this->route),
        'method' => 'get',
    ));
    ?>

<!--    <div class="row">
        <?php // echo $form->label($model, 'idcajero'); ?>
        <?php // echo $form->textField($model, 'idcajero'); ?>
    </div>-->

    <div class="row">
        <?php echo $form->label($model, 'nombre'); ?>
        <?php echo $form->textField($model, 'nombre', array('size' => 45, 'maxlength' => 45)); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model, 'email'); ?>
        <?php echo $form->textField($model, 'email', array('size' => 45, 'maxlength' => 45)); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model, 'estado'); ?>
        <?php echo $form->textField($model, 'estado', array('size' => 45, 'maxlength' => 45)); ?>
    </div>
<!--
    <div class="row">
        <?php // echo $form->label($model, 'idadministrador'); ?>
        <?php // echo $form->textField($model, 'idadministrador'); ?>
    </div>-->

    <div class="row buttons">
        <?php echo CHtml::submitButton('Buscar'); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- search-form -->