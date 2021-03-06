<?php
/* @var $this ReservaOficinaController */
/* @var $model ReservaOficina */
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
        <?php// echo $form->label($model, 'idreserva_oficina'); ?>
        <?php// echo $form->textField($model, 'idreserva_oficina'); ?>
    </div>-->
<div class="row">
        <?php echo $form->label($model, 'nombre'); ?>
        <?php echo $form->textField($model, 'nombre', array('size' => 45, 'maxlength' => 45)); ?>
    </div>
<div class="row">
        <?php echo $form->label($model, 'cedula'); ?>
        <?php echo $form->textField($model, 'cedula', array('size' => 45, 'maxlength' => 45)); ?>
    </div>

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

<!--    <div class="row">
        <?php// echo $form->label($model, 'idcajero'); ?>
        <?php// echo $form->textField($model, 'idcajero'); ?>
    </div>-->

    <div class="row buttons">
        <?php echo CHtml::submitButton('Buscar'); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- search-form -->