<?php
/* @var $this CompraController */
/* @var $model Compra */

$this->breadcrumbs = array(
    'Compras' ,
);

//$this->menu = array(
//    array('label' => 'Lista Compras', 'url' => array('index')),
//    array('label' => 'Crear Compra', 'url' => array('create')),
//);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#compra-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Lista de Compras</h1>

<!--<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p> -->

<?php echo CHtml::link('Buscador Compras', '#', array('class' => 'search-button')); ?>
<div class="search-form" style="display:none">
    <?php
    $this->renderPartial('_search', array(
        'model' => $model,
    ));
    ?>
</div><!-- search-form -->

<?php
$this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'compra-grid',
    'dataProvider' => $model->search(),
    'filter' => $model,
    'columns' => array(
      
        'fecha',
        'hora',
        'cantidad',
        'total',
        'estado',
        
        array(
            'class' => 'CButtonColumn',
        ),
    ),
));
?>

<?php
    $this->widget('zii.widgets.CMenu', array(
        'items' => array(
            array('label' => 'Nueva Compra','url' => array('/Compra/create')),
        ),
    ));
    ?>