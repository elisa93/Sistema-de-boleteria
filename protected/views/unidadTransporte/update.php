<?php
/* @var $this UnidadTransporteController */
/* @var $model UnidadTransporte */

$this->breadcrumbs=array(
	'Unidad Transportes'=>array('index'),
	$model->idunidad_transaporte=>array('view','id'=>$model->idunidad_transaporte),
	'Update',
);

$this->menu=array(
	array('label'=>'List UnidadTransporte', 'url'=>array('index')),
	array('label'=>'Create UnidadTransporte', 'url'=>array('create')),
	array('label'=>'View UnidadTransporte', 'url'=>array('view', 'id'=>$model->idunidad_transaporte)),
	array('label'=>'Manage UnidadTransporte', 'url'=>array('admin')),
);
?>

<h1>Update UnidadTransporte <?php echo $model->idunidad_transaporte; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>