<?php
/* @var $this CompraController */
/* @var $model Compra */

$this->breadcrumbs = array(
    'Compras' => array('index'),
    $model->idcompra => array('view', 'id' => $model->idcompra),
    'Update',
);

$this->menu = array(
    array('label' => 'Lista Compras', 'url' => array('index')),
    array('label' => 'Crear Compra', 'url' => array('create')),
    array('label' => 'Informacion Compra', 'url' => array('view', 'id' => $model->idcompra)),
    array('label' => 'Manage Compra', 'url' => array('admin')),
);
?>

<h1>Modificar Compra <?php echo $model->idcompra; ?></h1>

<?php $this->renderPartial('_form', array('model' => $model)); ?>