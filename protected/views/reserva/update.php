<?php
/* @var $this ReservaController */
/* @var $model Reserva */

$this->breadcrumbs = array(
    'Reservas' => array('index'),
    $model->idreserva => array('view', 'id' => $model->idreserva),
    'Update',
);

$this->menu = array(
    array('label' => 'List Reserva', 'url' => array('index')),
    array('label' => 'Create Reserva', 'url' => array('create')),
    array('label' => 'View Reserva', 'url' => array('view', 'id' => $model->idreserva)),
    array('label' => 'Manage Reserva', 'url' => array('admin')),
);
?>

<h1>Update Reserva <?php echo $model->idreserva; ?></h1>

<?php $this->renderPartial('_form', array('model' => $model)); ?>