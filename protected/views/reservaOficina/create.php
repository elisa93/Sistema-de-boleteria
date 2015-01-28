<?php
/* @var $this ReservaOficinaController */
/* @var $model ReservaOficina */

$this->breadcrumbs = array(
    'Reserva' => array('admin'),
 //   'Create',
);

//$this->menu = array(
//    array('label' => 'List ReservaOficina', 'url' => array('index')),
//    array('label' => 'Manage ReservaOficina', 'url' => array('admin')),
//);
//?>

<h1>Nueva Reserva</h1>

<?php $this->renderPartial('_form', array('model' => $model)); ?>