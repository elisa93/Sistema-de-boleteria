<?php
/* @var $this CajeroController */
/* @var $model Cajero */

$this->breadcrumbs=array(
	'Cajeros'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Lista de Cajeros', 'url'=>array('index')),
	array('label'=>'Registrar Nuevo Cajero', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#cajero-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administración de Cajeros</h1>


<?php echo CHtml::link('Busqueda avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'cajero-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
	//	'idcajero',
		'nombre',
		'email',
		'password',
		'estado',
	//	'idadministrador',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
