<?php
/* @var $this AdministradorController */
/* @var $model Administrador */

$this->breadcrumbs = array(
    'Administrador' => array('index'),
    $model->idadministrador,
);

$this->menu = array(
    array('label' => 'List Administrador', 'url' => array('index')),
    array('label' => 'Create Administrador', 'url' => array('create')),
    array('label' => 'Update Administrador', 'url' => array('update', 'id' => $model->idadministrador)),
    array('label' => 'Delete Administrador', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->idadministrador), 'confirm' => 'Are you sure you want to delete this item?')),
    array('label' => 'Manage Administrador', 'url' => array('admin')),
);
?>

<h1>View Administrador #<?php echo $model->idadministrador; ?></h1>

<?php
$this->widget('zii.widgets.CDetailView', array(
    'data' => $model,
    'attributes' => array(
        'idadministrador',
        'nombre',
        'email',
        'clave',
        'cedula',
        'telefono',
    ),
));
?>
