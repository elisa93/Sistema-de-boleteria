<?php
/* @var $this VentaController */
/* @var $model Venta */

$this->breadcrumbs = array(
    'Ventas' => array('admin'),
   // $model->idventa => array('view', 'id' => $model->idventa),
    'Modificar',
);
//
//$this->menu = array(
//    array('label' => 'List Venta', 'url' => array('index')),
//    array('label' => 'Create Venta', 'url' => array('create')),
//    array('label' => 'View Venta', 'url' => array('view', 'id' => $model->idventa)),
//    array('label' => 'Manage Venta', 'url' => array('admin')),
//);
?>

<h1>Modificar Venta <?php //echo $model->idventa; ?></h1>

<?php $this->renderPartial('_form', array('model' => $model)); ?>