<?php
/* @var $this CatalogoRutaController */
/* @var $model CatalogoRuta */

$this->breadcrumbs = array(
    'Catalogo Rutas' => array('admin'),
 //   $model->idcatalogo_ruta,
    'Ver'
);
//
//$this->menu = array(
//    array('label' => 'List CatalogoRuta', 'url' => array('index')),
//    array('label' => 'Create CatalogoRuta', 'url' => array('create')),
//    array('label' => 'Update CatalogoRuta', 'url' => array('update', 'id' => $model->idcatalogo_ruta)),
//    array('label' => 'Delete CatalogoRuta', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->idcatalogo_ruta), 'confirm' => 'Are you sure you want to delete this item?')),
//    array('label' => 'Manage CatalogoRuta', 'url' => array('admin')),
//);
//?>

<h1> Catalogo s #<?php echo $model->idcatalogo_ruta; ?></h1>

<?php
$this->widget('zii.widgets.CDetailView', array(
    'data' => $model,
    'attributes' => array(
        'idcatalogo_ruta',
        'ciudad_origen',
        'ciudad_destino',
        'costo',
        'idadministrador',
    ),
));
?>
