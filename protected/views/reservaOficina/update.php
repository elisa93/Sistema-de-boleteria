<?php
/* @var $this ReservaOficinaController */
/* @var $model ReservaOficina */

$this->breadcrumbs = array(
    'Reserva Oficinas' => array('admin'),
   // $model->idreserva_oficina => array('view', 'id' => $model->idreserva_oficina),
    'Modificar',
);

//$this->menu = array(
//    array('label' => 'List ReservaOficina', 'url' => array('index')),
//    array('label' => 'Create ReservaOficina', 'url' => array('create')),
//    array('label' => 'View ReservaOficina', 'url' => array('view', 'id' => $model->idreserva_oficina)),
//    array('label' => 'Manage ReservaOficina', 'url' => array('admin')),
//);
?>

<h1>Modificar Reserva <?php //echo $model->idreserva_oficina; ?></h1>

<?php $this->renderPartial('_form', array('model' => $model)); ?>