<?php
/* @var $this CajeroController */
/* @var $model Cajero */

$this->breadcrumbs = array(
    'Cajeros' => array('index'),
    'Nuevo',
);

//$this->menu = array(
//    array('label' => 'List Cajero', 'url' => array('index')),
//    array('label' => 'Manage Cajero', 'url' => array('admin')),
//);
//?>

<h1>Registrar Nuevo Cajero</h1>

<?php $this->renderPartial('_form', array('model' => $model)); ?>