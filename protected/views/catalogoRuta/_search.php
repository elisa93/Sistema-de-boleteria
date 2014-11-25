<?php
/* @var $this CatalogoRutaController */
/* @var $model CatalogoRuta */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idcatalogo_ruta'); ?>
		<?php echo $form->textField($model,'idcatalogo_ruta'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ciudad_origen'); ?>
		<?php echo $form->textField($model,'ciudad_origen',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ciudad_destino'); ?>
		<?php echo $form->textField($model,'ciudad_destino',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'costo'); ?>
		<?php echo $form->textField($model,'costo',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idadministrador'); ?>
		<?php echo $form->textField($model,'idadministrador'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->