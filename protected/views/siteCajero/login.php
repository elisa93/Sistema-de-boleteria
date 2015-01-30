<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */
$baseUrl = Yii::app()->theme->baseUrl; 
$cs = Yii::app()->getClientScript();
$cs->registerCssFile($baseUrl.'/css/jquery.css');
  
$this->pageTitle = Yii::app()->name . ' - Login';

$this->breadcrumbs = array(
    'Login',
);
?>



 <!-- <p>Please fill out the following form with your login credentials:</p>  -->

<div class="form">
    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'cajerologin-form',
        'enableClientValidation' => true,
        'clientOptions' => array(
            'validateOnSubmit' => true,
        ),
    ));
    ?>

    <center><h1>Iniciar Sesion</h1></center>    <!--<p class="note">Fields with <span class="required">*</span> are required.</p> -->
    
    <div class="login2">
        
        
    <div class="row">
        <?php echo $form->labelEx($model, 'Usuario'); ?>
        <?php echo $form->textField($model, 'username'); ?>
        <?php echo $form->error($model, 'username'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'Contraseña'); ?>
        <?php echo $form->passwordField($model, 'password'); ?>
        <?php echo $form->error($model, 'password'); ?>
        <p class="hint">
            <!--Hint: You may login with <kbd>demo</kbd>/<kbd>demo</kbd> or <kbd>admin</kbd>/<kbd>admin</kbd>.form -->
        </p>
    </div>

    <div class="row rememberMe">
    <?php echo $form->checkBox($model, 'rememberMe'); ?>
    <?php echo $form->label($model, 'No cerrar sesion'); ?>
    <?php echo $form->error($model, 'rememberMe'); ?>
            </div>  
   
    <div class="row buttons">
        <?php
    $this->widget('zii.widgets.jui.CJuiButton',array(
    'buttonType'=>'submit',
    'name'=>'btnSubmit',
    'value'=>'1',
    'caption'=>'Login',
    'htmlOptions'=>array(
        'class'=>'ui-button-primary',
        'class'=>'shadowbutton',
        'style'=>'height:40px;',
        'style'=>'width:100px;',
//        'style'=>'border-radius:7px;'
        )
    ));
    ?>
    </div



    <?php $this->endWidget(); ?>
</div>
</div>