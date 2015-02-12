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

<?php 
//Yii::app()->user->setFlash('success', "Data1 saved!");
//Yii::app()->user->setFlash('notice', "Data3 ignored.");
//Yii::app()->user->setFlash('success',"El proceso fue realizado correctamente.");
foreach(Yii::app()->user->getFlashes() as $key => $message) {
        echo '<div class="flash-' . $key . '">' . $message . "</div>\n";
    }
echo CHtml::link('Buscador Compras', '#', array('class' => 'search-button')); ?>
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
       // 'cantidad',
        'total',
        'estado_pago',
        
        array(
            'class' => 'CButtonColumn',
            'template' => ($data->estado_pago == "pendiente")?'{borrar}':'{ok}',
           //  'template' => ($model->estado_pago=='pendiente')?"{view} {update}{pdf} {delete} {pagar} ":"{view} {update} {pdf} {delete} ", 
                'buttons'=>array(
                    'delete' => array
                (
                   // 'label'=>'Horario ',
                 // 'url'=>'CController::createUrl(/HorarioViaje/index)'
                    'url'=>'CController::createUrl("/Compra/delete", array("id"=>$data->idcompra))'
                    //   'imageUrl'=>Yii::app()->request->baseUrl.'/images/email.png',
                 //   'url'=>'Yii::app()->createUrl("users/email", array("id"=>$data->id))',
                ),
                        'pdf' => array(
                                'label'=>'Generar PDF', 
                                'url'=>"CHtml::normalizeUrl(array('pdf', 'id'=>\$data->idcompra))",
                                'imageUrl'=>Yii::app()->request->baseUrl.'/images/pdf_icon.png', 
                                'options' => array('class'=>'pdf'),
                        ),
                    'pagar' => array(
                                'label'=>'pagar', 
                                'url'=>"CHtml::normalizeUrl(array('pdf', 'id'=>\$data->idcompra))",
                                'options' => array('class'=>'pdf'),
                        ),
                ),
        ),
    ),
));
?>

