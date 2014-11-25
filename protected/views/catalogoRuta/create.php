<?php
/* @var $this CatalogoRutaController */
/* @var $model CatalogoRuta */

$this->breadcrumbs=array(
	'Catalogo Rutas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List CatalogoRuta', 'url'=>array('index')),
	array('label'=>'Manage CatalogoRuta', 'url'=>array('admin')),
);
?>

<h1>Create CatalogoRuta</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>