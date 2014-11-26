<?php
/* @var $this CambioBoletoController */
/* @var $model CambioBoleto */

$this->breadcrumbs = array(
    'Cambio Boletos' => array('index'),
    $model->idcambio_boleto,
);

$this->menu = array(
    array('label' => 'List CambioBoleto', 'url' => array('index')),
    array('label' => 'Create CambioBoleto', 'url' => array('create')),
    array('label' => 'Update CambioBoleto', 'url' => array('update', 'id' => $model->idcambio_boleto)),
    array('label' => 'Delete CambioBoleto', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->idcambio_boleto), 'confirm' => 'Are you sure you want to delete this item?')),
    array('label' => 'Manage CambioBoleto', 'url' => array('admin')),
);
?>

<h1>View CambioBoleto #<?php echo $model->idcambio_boleto; ?></h1>

<?php
$this->widget('zii.widgets.CDetailView', array(
    'data' => $model,
    'attributes' => array(
        'idcambio_boleto',
        'fecha',
        'hora',
        'total_anterior',
        'total_nuevo',
        'idcajero',
        'idventa',
    ),
));
?>
