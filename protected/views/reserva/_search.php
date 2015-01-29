<?php
/* @var $this ReservaController */
/* @var $model Reserva */
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
        <?php// echo $form->label($model, 'idreserva'); ?>
        <?php// echo $form->textField($model, 'idreserva'); ?>
    </div>-->

    <div class="row">
        <?php echo $form->label($model, 'fecha'); ?>
        <?php echo $form->textField($model, 'fecha', array('size' => 45, 'maxlength' => 45)); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model, 'hora'); ?>
        <?php echo $form->textField($model, 'hora', array('size' => 45, 'maxlength' => 45)); ?>
    </div>
    <div class="row">
        <?php echo $form->label($model, 'cantidad'); ?>
        <?php echo $form->textField($model, 'cantidad', array('size' => 45, 'maxlength' => 45)); ?>
    </div>
    <div class="row">
        <?php echo $form->label($model, 'total'); ?>
        <?php echo $form->textField($model, 'total', array('size' => 45, 'maxlength' => 45)); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model, 'estado'); ?>
        <?php echo $form->textField($model, 'estado', array('size' => 45, 'maxlength' => 45)); ?>
    </div>

<!--    <div class="row">
        <?php// echo $form->label($model, 'idcliente'); ?>
        <?php// echo $form->textField($model, 'idcliente'); ?>
    </div>-->

    <div class="row buttons">
        <?php echo CHtml::submitButton('Buscar'); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- search-form -->