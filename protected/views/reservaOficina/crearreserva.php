<?php
/* @var $this CompraController */
/* @var $model Compra */

//$this->breadcrumbs = array(
//    'Nueva Compra' => array('Compra/create'),
//    
//);

$this->breadcrumbs = array(
    'Reserva' => array('admin'),
  'Nueva Reserva',
);

//$this->menu = array(
//    array('label' => 'Lista Compras', 'url' => array('index')),
//    array('label' => 'Compra', 'url' => array('admin')),
//);
//?>

<h1>Nueva Reserva</h1>

<?php 

if($bandera==1)
$this->renderPartial('_reserva', array('model' => $model,'modelhorario'=>$modelhorario,'bandera'=>$bandera));
if($bandera==0)
$this->renderPartial('_reserva', array('model' => $model,'bandera'=>$bandera));
if($bandera==2)
$this->renderPartial('_reserva', array('model' => $model,'boletos'=>$boletos,'bandera'=>$bandera,'modelhorario'=>$modelhorario));
?>

