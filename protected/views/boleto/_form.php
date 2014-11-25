<?php
/* @var $this BoletoController */
/* @var $model Boleto */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'boleto-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'numero_boleto'); ?>
		<?php echo $form->textField($model,'numero_boleto',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'numero_boleto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tipo'); ?>
		<?php echo $form->textField($model,'tipo',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'tipo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'estado'); ?>
		<?php echo $form->textField($model,'estado',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'estado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'transaporte'); ?>
		<?php echo $form->textField($model,'transaporte'); ?>
		<?php echo $form->error($model,'transaporte'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'idventa'); ?>
		<?php echo $form->textField($model,'idventa'); ?>
		<?php echo $form->error($model,'idventa'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'idreserva_oficina'); ?>
		<?php echo $form->textField($model,'idreserva_oficina'); ?>
		<?php echo $form->error($model,'idreserva_oficina'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'idcompra'); ?>
		<?php echo $form->textField($model,'idcompra'); ?>
		<?php echo $form->error($model,'idcompra'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'idreserva'); ?>
		<?php echo $form->textField($model,'idreserva'); ?>
		<?php echo $form->error($model,'idreserva'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->