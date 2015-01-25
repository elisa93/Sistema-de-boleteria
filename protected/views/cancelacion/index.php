<?php
/* @var $this CancelacionController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs = array(
    'Cancelacions',
);

$this->menu = array(
    array('label' => 'Create Cancelacion', 'url' => array('create')),
    array('label' => 'Manage Cancelacion', 'url' => array('admin')),
);
?>

<h1>Cancelacions</h1>

<?php
$this->widget('zii.widgets.CListView', array(
    'dataProvider' => $dataProvider,
    'itemView' => '_view',
));
?>
