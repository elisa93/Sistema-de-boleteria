<?php
/* @var $this UnidadTransporteController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs = array(
    'Unidades de Transporte',
);

//$this->menu = array(
//    array('label' => 'Registrar nueva U.de Transporte', 'url' => array('create')),
//    array('label' => 'Administrar U. de Transporte', 'url' => array('admin')),
//);
//?>

<h1>Lista de Unidades de Transporte</h1>

<?php
$this->widget('zii.widgets.CListView', array(
    'dataProvider' => $dataProvider,
    'itemView' => '_view',
));
?>
