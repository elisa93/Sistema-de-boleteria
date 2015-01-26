<?php
/* @var $this ReservaController */
/* @var $model Reserva */

$this->breadcrumbs = array(
    'Reservas' => array('index'),
    'Manage',
);

//$this->menu = array(
//    array('label' => 'List Reserva', 'url' => array('index')),
//    array('label' => 'Create Reserva', 'url' => array('create')),
//);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#reserva-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Lista de Reservas</h1>



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
    'id' => 'reserva-grid',
    'dataProvider' => $model->search(),
    'filter' => $model,
    'columns' => array(
    //    'idreserva',
        'fecha',
        'hora',
        'total',
        'estado',
     //   'idcliente',
        array(
            'class' => 'CButtonColumn',
        ),
    ),
));
?>
<?php
    $this->widget('zii.widgets.CMenu', array(
        'items' => array(
            array('label' => 'Nueva Reserva','url' => array('/Reserva/create')),
        ),
    ));
    ?>