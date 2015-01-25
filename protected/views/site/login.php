<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle = Yii::app()->name . ' - Login';
$this->breadcrumbs = array(
    'Login',
);
?>

<h1>Login</h1>

 <!-- <p>Please fill out the following form with your login credentials:</p>  -->

<div class="form">
    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'login-form',
        'enableClientValidation' => true,
        'clientOptions' => array(
            'validateOnSubmit' => true,
        ),
    ));
    ?>

        <!--<p class="note">Fields with <span class="required">*</span> are required.</p> -->

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
        <?php echo CHtml::submitButton('Login'); ?>
    </div>


    <?php $this->endWidget(); ?>
    <?php
    $this->widget('zii.widgets.CMenu', array(
        'items' => array(
            array('label' => Yii::t('traductor', 'Registrarse'), 'url' => array('/cliente/create')),
        ),
    ));
    ?>
</div>
