<?php
/* @var $this CatalogoRutaController */
/* @var $model CatalogoRuta */

$this->breadcrumbs=array(
	'Catalogo Rutas'=>array('index'),
	$model->idcatalogo_ruta=>array('view','id'=>$model->idcatalogo_ruta),
	'Update',
);

$this->menu=array(
	array('label'=>'List CatalogoRuta', 'url'=>array('index')),
	array('label'=>'Create CatalogoRuta', 'url'=>array('create')),
	array('label'=>'View CatalogoRuta', 'url'=>array('view', 'id'=>$model->idcatalogo_ruta)),
	array('label'=>'Manage CatalogoRuta', 'url'=>array('admin')),
);
?>

<h1>Update CatalogoRuta <?php echo $model->idcatalogo_ruta; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>