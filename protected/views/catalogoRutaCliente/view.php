<?php
/* @var $this CatalogoRutaController */
/* @var $model CatalogoRuta */

$this->breadcrumbs = array(
    'Catalogo Rutas' => array('index'),
    $model->idcatalogo_ruta,
);

$this->menu = array(
    array('label' => 'List CatalogoRuta', 'url' => array('index')),
    array('label' => 'Creaste CatalogoRuta', 'url' => array('create')),
    array('label' => 'Update CatalogoRuta', 'url' => array('update', 'id' => $model->idcatalogo_ruta)),
    array('label' => 'Delete CatalogoRuta', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->idcatalogo_ruta), 'confirm' => 'Are you sure you want to delete this item?')),
    array('label' => 'Manage CatalogoRuta', 'url' => array('admin')),
);
?>

<h1>  #<?php echo $model->idcatalogo_ruta; ?></h1>

<?php
$this->widget('zii.widgets.CDetailView', array(
    'data' => $model,
    'attributes' => array(
        'idcatalogo_ruta',
        'ciudad_origen',
        'ciudad_destino',
        'costo',
        'idadministradors',
    ),
));
?>
