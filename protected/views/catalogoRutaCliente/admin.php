<?php
/* @var $this CatalogoRutaController */
/* @var $model CatalogoRuta */

$this->breadcrumbs = array(
    'Catalogo Rutas' => array('index'),
    'Administrar',
);

//$this->menu = array(
//    array('label' => 'Lista de Rutas', 'url' => array('index')),
//    array('label' => 'Crear Nueva Ruta', 'url' => array('create')),
//);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#catalogo-ruta-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Nuestras rutas disponibles son:</h1>

<?php echo CHtml::link('Busqueda  avanzada', '#', array('class' => 'search-button')); ?>
<div class="search-form" style="display:none">
    <?php
    $this->renderPartial('_search', array(
        'model' => $model,
    ));
    ?>
</div><!-- search-form -->

<?php
$this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'catalogo-ruta-grid',
    'dataProvider' => $model->search_cliente(),
    'filter' => $model,
    'columns' => array(  
        'ciudad_origen',
        'ciudad_destino',
        'costo',
        
    ),
));
?>

   
