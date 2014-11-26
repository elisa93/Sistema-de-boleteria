<?php
/* @var $this CajeroController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs = array(
    'Cajeros',
);

$this->menu = array(
    array('label' => 'Crear  Cajero', 'url' => array('create')),
    array('label' => 'Administar Cajeros', 'url' => array('admin')),
);
?>

<h1>Lista de Cajeros</h1>

<?php
$this->widget('zii.widgets.CListView', array(
    'dataProvider' => $dataProvider,
    'itemView' => '_view',
));
?>
