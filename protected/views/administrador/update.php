<?php
/* @var $this AdministradorController */
/* @var $model Administrador */

$this->breadcrumbs = array(
    'Administrador' => array('index'),
    $model->idadministrador => array('view', 'id' => $model->idadministrador),
    'Modificar',
);

$this->menu = array(
    array('label' => 'List Administrador', 'url' => array('index')),
    array('label' => 'Create Administrador', 'url' => array('create')),
    array('label' => 'View Administrador', 'url' => array('view', 'id' => $model->idadministrador)),
    array('label' => 'Manage Administrador', 'url' => array('admin')),
);
?>

<h1>Actualizar datos de Administrador <?php echo $model->idadministrador; ?></h1>

<?php $this->renderPartial('_form', array('model' => $model)); ?>