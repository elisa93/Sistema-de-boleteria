<?php
/* @var $this ReservaController */
/* @var $model Reserva */

$this->breadcrumbs = array(
    'Reservas' => array('admin'),
  //  'Manage',
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
    'id' => 'reserva-grid',
    'dataProvider' => $model->search(),
    'filter' => $model,
    'columns' => array(
    //    'idreserva',
        'fecha',
        'hora',
    //    'cantidad',
        'total',
        'estado',
     //   'idcliente',
        array(
            'class' => 'CButtonColumn',
             'template' =>'{view} {update}{delete} {pagar} ', 
                'buttons'=>array(
                     'pdf' => array(
                                'label'=>'Generar PDF', 
                                'url'=>"CHtml::normalizeUrl(array('pdf', 'id'=>\$data->idreserva))",
                                'imageUrl'=>Yii::app()->request->baseUrl.'/images/pdf_icon.png', 
                                'options' => array('class'=>'pdf'),
                        ),
                     'pagar' => array(
                                'label'=>'pagar', 
                                 'url'=>'CController::createUrl("/Reserva/pagar", array("id"=>$data->idreserva))',
                                'options' => array('class'=>'pdf'),
                        ),
                    
                ),
        ),
    ),
));
?>
