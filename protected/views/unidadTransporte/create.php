<?php
/* @var $this UnidadTransporteController */
/* @var $model UnidadTransporte */

$this->breadcrumbs = array(
    'Unidad Transportes' => array('index'),
    'Nueva U. de Transporte',
);

$this->menu = array(
    array('label' => 'Lista de U. de Transporte', 'url' => array('index')),
    array('label' => 'Administrar U. de Transporte', 'url' => array('admin')),
);
?>

<h1>Registrar Nueva Unidad de Transporte</h1>

<?php $this->renderPartial('_form', array('model' => $model)); ?>