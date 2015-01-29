<?php
/* @var $this ClienteController */
/* @var $model Cliente */

$this->breadcrumbs = array(
    'Login' => array('admin'),
    'Registrarse',
);

$this->menu = array(
    array('label' => 'List Cliente', 'url' => array('index')),
    array('label' => 'Manage Cliente', 'url' => array('admin')),
);
?>

<h1>Registrarse </h1>

<?php $this->renderPartial('_form', array('model' => $model)); ?>