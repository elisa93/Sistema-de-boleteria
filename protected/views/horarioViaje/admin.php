<?php
/* @var $this HorarioViajeController */
/* @var $model HorarioViaje */

$this->breadcrumbs=array(
	'Horario Viajes'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List HorarioViaje', 'url'=>array('index')),
	array('label'=>'Create HorarioViaje', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#horario-viaje-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Horario Viajes</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'horario-viaje-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'idhorario_viaje',
		'hora_salida',
		'hora_llegada',
		'idcatalogo_ruta',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
