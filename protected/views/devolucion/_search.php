<?php
/* @var $this DevolucionController */
/* @var $model Devolucion */
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
        <?php echo $form->label($model, 'iddevolucion'); ?>
        <?php echo $form->textField($model, 'iddevolucion'); ?>
    </div>-->

    <div class="row">
        <?php echo $form->label($model, 'fecha'); ?>
        <?php echo $form->textField($model, 'fecha', array('size' => 45, 'maxlength' => 45)); ?>
    </div>

<!--    <div class="row">
        <?php echo $form->label($model, 'hora'); ?>
        <?php echo $form->textField($model, 'hora', array('size' => 45, 'maxlength' => 45)); ?>
    </div>-->

<!--    <div class="row">
        <?php echo $form->label($model, 'idcajero'); ?>
        <?php echo $form->textField($model, 'idcajero'); ?>
    </div>-->

<!--    <div class="row">
        <?php echo $form->label($model, 'venta_idventa'); ?>
        <?php echo $form->textField($model, 'venta_idventa'); ?>
    </div>-->

    <div class="row buttons">
        <?php echo CHtml::submitButton('Buscar'); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- search-form -->