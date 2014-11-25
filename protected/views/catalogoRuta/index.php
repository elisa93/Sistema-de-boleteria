<?php
/* @var $this CatalogoRutaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Catalogo Rutas',
);

$this->menu=array(
	array('label'=>'Create CatalogoRuta', 'url'=>array('create')),
	array('label'=>'Manage CatalogoRuta', 'url'=>array('admin')),
);
?>

<h1>Catalogo Rutas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
