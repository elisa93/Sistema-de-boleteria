<?php
/* @var $this ClienteController */
/* @var $model Cliente */

$this->breadcrumbs = array(
 //   'Clientes' => array('index'),
    'Clientes',
);

$this->menu = array(
    array('label' => 'List Cliente', 'url' => array('index')),
    array('label' => 'Create Cliente', 'url' => array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#cliente-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Clientes</h1>

<!--<p>
    You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
    or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>-->

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
    'id' => 'cliente-grid',
    'dataProvider' => $model->search(),
    'filter' => $model,
    'columns' => array(
      //  'idusuario',
        'email',
        'cedula',
        'nombre',
        'telefono',
        'direccion',
        /*
          'password',
          'estado',
         */
        array(
            'class' => 'CButtonColumn',
             'header'=>'Operations',
            'template'=>'{compras} {reservas}',
            'buttons'=>array
            (
                'compras' => array
                (
                    'label'=>'Compras',
                 // 'url'=>'CController::createUrl(/HorarioViaje/index)'
                    'url'=>'CController::createUrl("/Compra/adminCajero", array("id"=>$data->idusuario))'
                    //   'imageUrl'=>Yii::app()->request->baseUrl.'/images/email.png',
                 //   'url'=>'Yii::app()->createUrl("users/email", array("id"=>$data->id))',
                ),
                'reservas' => array
                (
                    'label'=>'Reservas',
                 // 'url'=>'CController::createUrl(/HorarioViaje/index)'
                    'url'=>'CController::createUrl("/Reserva/adminCajero", array("id"=>$data->idusuario))'
                    //   'imageUrl'=>Yii::app()->request->baseUrl.'/images/email.png',
                 //   'url'=>'Yii::app()->createUrl("users/email", array("id"=>$data->id))',
                ),
              
            ),
        ),
    ),
));
?>
