<?php
/* @var $this CatalogoRutaController */
/* @var $model CatalogoRuta */

$this->breadcrumbs=array(
	'Catalogo Rutas'=>array('index'),
	'Nueva ruta',
);

$this->menu=array(
	array('label'=>'Lista de Rutas', 'url'=>array('index')),
	array('label'=>'Administrar Rutas', 'url'=>array('admin')),
);
?>

<h1>Crear Nueva Ruta</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>