<?php
/* @var $this CambioBoletoController */
/* @var $model CambioBoleto */

$this->breadcrumbs = array(
    'Cambio Boletos' => array('admin'),
 //   'Create',
);

//$this->menu = array(
//    array('label' => 'List CambioBoleto', 'url' => array('index')),
//    array('label' => 'Manage CambioBoleto', 'url' => array('admin')),
//);
?>

<h1>Nuevo Cambio de Boleto</h1>

<?php $this->renderPartial('_form', array('model' => $model)); ?>