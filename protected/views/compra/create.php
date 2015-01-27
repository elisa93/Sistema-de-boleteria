<?php
/* @var $this CompraController */
/* @var $model Compra */

$this->breadcrumbs = array(
    'Compras' => array('index'),
    'Nueva Compra',
);

//$this->menu = array(
//    array('label' => 'Lista Compras', 'url' => array('index')),
//    array('label' => 'Compra', 'url' => array('admin')),
//);
//?>

<h1>Nueva Compra</h1>

<?php $this->renderPartial('_form', array('model' => $model)); ?>