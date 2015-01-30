<?php
/* @var $this ClienteController */
/* @var $model Cliente */

$this->breadcrumbs = array(
    'Cliente',
   // $model->idusuario,
);

$this->menu = array(
    array('label' => 'List Cliente', 'url' => array('index')),
    array('label' => 'Create Cliente', 'url' => array('create')),
    array('label' => 'Update Cliente', 'url' => array('update', 'id' => $model->idusuario)),
    array('label' => 'Delete Cliente', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->idusuario), 'confirm' => 'Are you sure you want to delete this item?')),
    array('label' => 'Manage Cliente', 'url' => array('admin')),
);
?>

<h1>Datos de cuenta: <?php //echo $model->idusuario; ?></h1>

<?php
$this->widget('zii.widgets.CDetailView', array(
    'data' => $model,
    'attributes' => array(
       // 'idusuario',
        'email',
        'cedula',
        'nombre',
        'telefono',
        'direccion',
        //'password',
       // 'estado',
    ),
));

?>
 <?php
    $this->widget('zii.widgets.CMenu', array(
        'items' => array(
            array('label' => Yii::t('traductor', 'Modificar Cuenta'), 'url' => array('/cliente/update')),
        ),
    ));
    ?>