<?php
/* @var $this AdministradorController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs = array(
    'Administrador',
);

$this->menu = array(
    array('label' => 'Create Administrador', 'url' => array('create')),
    array('label' => 'Manage Administrador', 'url' => array('admin')),
);
?>

<h1>Administrador</h1>

<?php
$this->widget('zii.widgets.CListView', array(
    'dataProvider' => $dataProvider,
    'itemView' => '_view',
));
?>
