<?php
/* @var $this VentaController */
/* @var $model Venta */

$this->breadcrumbs = array(
    'Ventas' => array('admin'),
   // 'Create',
);

//$this->menu = array(
//    array('label' => 'List Venta', 'url' => array('index')),
//    array('label' => 'Manage Venta', 'url' => array('admin')),
//);
//?>

<h1>Nueva Venta</h1>

<?php $this->renderPartial('_form', array('model' => $model)); ?>