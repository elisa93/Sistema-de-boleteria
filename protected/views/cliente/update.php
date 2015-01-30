<?php
/* @var $this ClienteController */
/* @var $model Cliente */

$this->breadcrumbs = array(
    'Clientes',
 //   $model->idusuario => array('view', 'id' => $model->idusuario),
    'Actualizar',
);

//$this->menu = array(
//    array('label' => 'List Cliente', 'url' => array('index')),
//    array('label' => 'Create Cliente', 'url' => array('create')),
//    array('label' => 'View Cliente', 'url' => array('view', 'id' => $model->idusuario)),
//    array('label' => 'Manage Cliente', 'url' => array('admin')),
//);
//?>

<h1>Actualizar Datos <?php //echo $model->idusuario; ?></h1>

<?php $this->renderPartial('_form', array('model' => $model)); ?>