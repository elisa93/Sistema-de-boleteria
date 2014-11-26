<?php
/* @var $this UnidadTransporteController */
/* @var $model UnidadTransporte */

$this->breadcrumbs = array(
    'Unidad Transportes' => array('index'),
    $model->idunidad_transaporte => array('view', 'id' => $model->idunidad_transaporte),
    'Modificar',
);

$this->menu = array(
    array('label' => 'Lista de U. de Transporte', 'url' => array('index')),
    array('label' => 'Registrar nueva U. Transporte', 'url' => array('create')),
    array('label' => 'Ver Unidad de Transporte', 'url' => array('view', 'id' => $model->idunidad_transaporte)),
    array('label' => 'Administrar U. de Transporte', 'url' => array('admin')),
);
?>

<h1>Modificar Unidad de Transporte <?php echo $model->idunidad_transaporte; ?></h1>

<?php $this->renderPartial('_form', array('model' => $model)); ?>