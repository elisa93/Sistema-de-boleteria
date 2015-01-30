<?php
/* @var $this ReservaOficinaController */
/* @var $model ReservaOficina */

$this->breadcrumbs = array(
   // 'Reservas' => array('admin'),
    'Reservas' => array('admin'),
  //  'Manage',
);

//$this->menu = array(
//    array('label' => 'List ReservaOficina', 'url' => array('index')),
//    array('label' => 'Create ReservaOficina', 'url' => array('create')),
//);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#reserva-oficina-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Lista de Reservas</h1>



<?php 
//Yii::app()->user->setFlash('success', "Data1 saved!");
//Yii::app()->user->setFlash('notice', "Data3 ignored.");
//Yii::app()->user->setFlash('success',"El proceso fue realizado correctamente.");
foreach(Yii::app()->user->getFlashes() as $key => $message) {
        echo '<div class="flash-' . $key . '">' . $message . "</div>\n";
    }
echo CHtml::link('Busqueda Avanzada', '#', array('class' => 'search-button')); ?>
<div class="search-form" style="display:none">
    <?php
    $this->renderPartial('_search', array(
        'model' => $model,
    ));
    ?>
</div><!-- search-form -->

<?php
$this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'reserva-oficina-grid',
    'dataProvider' => $model->search(),
    'filter' => $model,
    'columns' => array(
       // 'idreserva_oficina',
        'fecha',
        'hora',
           'cantidad',
        'total',
     
       // 'idcajero',
        array(
            'class' => 'CButtonColumn',
        ),
    ),
));
?>

<?php
    $this->widget('zii.widgets.CMenu', array(
        'items' => array(
            array('label' => 'Nueva Reserva','url' => array('/ReservaOficina/create')),
        ),
    ));
    ?>