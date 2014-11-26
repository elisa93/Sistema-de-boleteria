<?php
/* @var $this CompraController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs = array(
    'Compras',
);

$this->menu = array(
    array('label' => 'Crear Compra', 'url' => array('create')),
    array('label' => 'Compra', 'url' => array('admin')),
);
?>

<h1>Compras</h1>

<?php
$this->widget('zii.widgets.CListView', array(
    'dataProvider' => $dataProvider,
    'itemView' => '_view',
));
?>
