<?php
/* @var $this DevolucionController */
/* @var $model Devolucion */

$this->breadcrumbs = array(
    'Devoluciones' => array('admin'),
    'Nueva Devolucion',
);

//$this->menu = array(
//    array('label' => 'List Devolucion', 'url' => array('index')),
//    array('label' => 'Manage Devolucion', 'url' => array('admin')),
//);
?>

<h1>Create Devolucion</h1>

<?php $this->renderPartial('_form', array('model' => $model)); ?>