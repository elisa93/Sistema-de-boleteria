<?php
/* @var $this CompraController */
/* @var $model Compra */
/* @var $form CActiveForm */
?>

<div class="form">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'compra-form',
        // Please note: When you enable ajax validation, make sure the corresponding
        // controller action is handling ajax validation correctly.
        // There is a call to performAjaxValidation() commented in generated controller code.
        // See class documentation of CActiveForm for details on this.
        'enableAjaxValidation' => false,
    ));
    ?>

    <p class="note">Los campos marcados con un  <span class="required">*</span> son obligatorios.</p>


    <div class="row">
        <?php echo $form->labelEx($model, 'fecha'); ?>
        <?php echo $form->textField($model, 'fecha', array('size' => 45, 'maxlength' => 45,'id'=>'fecha')); ?>
         <?php  $this->widget('ext.gcalendar.GCalendar',array(
                                   'model' =>$model,
                                   'theme' => 'zune',
                                   'inputField'=>'fecha', 
                                   'daFormat'=>'yyyy-mm-dd hh:ii',
                                   'languageCode' => 'es',    
                               )
                     ); 
                ?>    
        <?php echo $form->error($model, 'fecha'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'hora'); ?>
        <?php //echo $form->textField($model, 'hora', array('size' => 45, 'maxlength' => 45)); ?>
      <?php
      Yii::import('zii.widgets.jui.CJuiInputWidget');

      $this->widget('ext.juiclockpick.EClockpick', array(
         'model'            => $model,
         'attribute'        =>'hora',
         'options'          =>array(
             'starthour'    => 0,
             'endhour'      => 24,
             'showminutes'  => TRUE,
            'minutedivisions'   => 12,
            'military'      => TRUE,
         ),
         'htmlOptions'      => array('size'=>45,'maxlength'=>45)
    )); ?>
        <?php echo $form->error($model, 'hora'); ?>
    </div>
     <div class="row">
        <?php echo $form->labelEx($model, 'cantidad'); ?>
        <?php echo $form->textField($model, 'cantidad', array('size' => 45, 'maxlength' => 45)); ?>
        <?php echo $form->error($model, 'cantidad'); ?>
    </div>
    <div class="row">
        <?php echo $form->labelEx($model, 'total'); ?>
        <?php echo $form->textField($model, 'total', array('size' => 45, 'maxlength' => 45)); ?>
        <?php echo $form->error($model, 'total'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'estado'); ?>
        <?php echo $form->textField($model, 'estado', array('size' => 45, 'maxlength' => 45)); ?>
        <?php echo $form->error($model, 'estado'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'Ciudad de origen'); ?>
        <?php
        $list = CHtml::listData(CatalogoRuta::model()->findAll(array('order' => 'ciudad_origen')), 'ciudad_origen', 'ciudad_origen');
        echo $form->dropDownList($model, 'idcliente', $list);
          ?>
        </div>

     <div class="row">
        <?php echo $form->labelEx($model, 'Ciudad de desyino'); ?>
         <?php $list = CHtml::listData(CatalogoRuta::model()->findAll(array('order' => 'ciudad_destino')), 'ciudad_destino', 'ciudad_destino');
        echo $form->dropDownList($model, 'idcliente', $list);
        ?>
        <?php // echo $form->labelEx($model, 'idcliente'); ?>
        <?php// echo $form->textField($model, 'idcliente'); ?>
        <?php //echo $form->error($model, 'idcliente'); ?>
    </div>

    <div class="row buttons">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar'); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->