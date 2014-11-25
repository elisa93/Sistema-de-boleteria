<?php
/* @var $this UnidadTransporteController */
/* @var $model UnidadTransporte */

$this->breadcrumbs=array(
	'Unidad Transportes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List UnidadTransporte', 'url'=>array('index')),
	array('label'=>'Manage UnidadTransporte', 'url'=>array('admin')),
);
?>

<h1>Create UnidadTransporte</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>