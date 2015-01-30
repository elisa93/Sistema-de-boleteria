<?php
/* @var $this CompraController */
/* @var $model Compra */

//$this->breadcrumbs = array(
//    'Nueva Compra' => array('Compra/create'),
//    
//);

$this->breadcrumbs = array(
    'Compras' => array('admin'),
  'Nueva Compra',
);

//$this->menu = array(
//    array('label' => 'Lista Compras', 'url' => array('index')),
//    array('label' => 'Compra', 'url' => array('admin')),
//);
//?>

<h1>Nueva Compra</h1>

<?php 

if($bandera==1)
$this->renderPartial('_venta', array('model' => $model,'modelhorario'=>$modelhorario,'bandera'=>$bandera));
if($bandera==0)
$this->renderPartial('_venta', array('model' => $model,'bandera'=>$bandera));
if($bandera==2)
$this->renderPartial('_venta', array('model' => $model,'boletos'=>$boletos,'bandera'=>$bandera,'modelhorario'=>$modelhorario));
?>

