<?php
$this->pageTitle = Yii::app()->name;
?>
<?php
$baseUrl = Yii::app()->theme->baseUrl; 
$cs = Yii::app()->getClientScript();
$cs->registerScriptFile('http://www.google.com/jsapi');
$cs->registerCoreScript('jquery');
$cs->registerScriptFile($baseUrl.'/js/jquery.gvChart-1.0.1.min.js');
$cs->registerScriptFile($baseUrl.'/js/pbs.init.js');
 ?>
<h1>Bienvenido al sistema de cajero de boleteria del la cooperativa de transporte Unión Cariamanga</h1>

<p>Aquí podra registrar nuevos ventas, reservas de viaje y devoluciones de transporte</p>

<a href="index.php"></a>
