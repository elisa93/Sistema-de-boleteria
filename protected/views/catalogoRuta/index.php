<?php
/* @var $this CatalogoRutaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs = array(
    'Catalogo Rutas',
);

//$this->menu = array(
//    array('label' => 'Crear Nueva Ruta', 'url' => array('create')),
//    array('label' => 'Administrar Rutas', 'url' => array('admin')),
//);
//?>

<h1>Lista de Rutas</h1>

<?php
$this->widget('zii.widgets.CListView', array(
    'dataProvider' => $dataProvider,
    'itemView' => '_view',
));
?>
