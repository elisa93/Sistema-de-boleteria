<?php
/* @var $this CambioBoletoController */
/* @var $model CambioBoleto */

$this->breadcrumbs = array(
    'Cambio Boletos' => array('admin'),
  //  'Manage',
);

//$this->menu = array(
//    array('label' => 'List CambioBoleto', 'url' => array('index')),
//    array('label' => 'Create CambioBoleto', 'url' => array('create')),
//);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#cambio-boleto-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Lista de Cambio de Boletos</h1>


<?php echo CHtml::link('Busqueda Avanzada', '#', array('class' => 'search-button')); ?>
<div class="search-form" style="display:none">
    <?php
    $this->renderPartial('_search', array(
        'model' => $model,
    ));
    ?>
</div><!-- search-form -->

<?php
$this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'cambio-boleto-grid',
    'dataProvider' => $model->search(),
    'filter' => $model,
    'columns' => array(
        //'idcambio_boleto',
        'fecha',
        'hora',
        'total_anterior',
        'total_nuevo',
        //'idcajero',
        /*
          'idventa',
         */
        array(
            'class' => 'CButtonColumn',
        ),
    ),
));
?>

<?php
    $this->widget('zii.widgets.CMenu', array(
        'items' => array(
            array('label' => 'Nuevo Cambio','url' => array('/CambioBoleto/create')),
        ),
    ));
    ?>