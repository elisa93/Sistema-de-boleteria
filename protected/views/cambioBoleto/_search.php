<?php
/* @var $this CambioBoletoController */
/* @var $model CambioBoleto */
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
        <?php //echo $form->label($model, 'idcambio_boleto'); ?>
        <?php //echo $form->textField($model, 'idcambio_boleto'); ?>
    </div>-->

    <div class="row">
        <?php echo $form->label($model, 'fecha'); ?>
        <?php echo $form->textField($model, 'fecha', array('size' => 45, 'maxlength' => 45)); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model, 'hora'); ?>
        <?php echo $form->textField($model, 'hora', array('size' => 45, 'maxlength' => 45)); ?>
    </div>

<!--    <div class="row">
        <?php //echo $form->label($model, 'total_anterior'); ?>
        <?php //echo $form->textField($model, 'total_anterior'); ?>
    </div>-->

<!--    <div class="row">
        <?php //echo $form->label($model, 'total_nuevo'); ?>
        <?php //echo $form->textField($model, 'total_nuevo'); ?>
    </div>-->

<!--    <div class="row">
        <?php //echo $form->label($model, 'idcajero'); ?>
        <?php //echo $form->textField($model, 'idcajero'); ?>
    </div>-->

<!--    <div class="row">
        <?php //echo $form->label($model, 'idventa'); ?>
        <?php //echo $form->textField($model, 'idventa'); ?>
    </div>-->

    <div class="row buttons">
        <?php echo CHtml::submitButton('Search'); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- search-form -->