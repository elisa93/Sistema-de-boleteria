<?php
/* @var $this BoletoController */
/* @var $model Boleto */

$this->breadcrumbs = array(
    'Boletos' => array('index'),
    $model->idboleto,
);

$this->menu = array(
    array('label' => 'List Boleto', 'url' => array('index')),
    array('label' => 'Create Boleto', 'url' => array('create')),
    array('label' => 'Update Boleto', 'url' => array('update', 'id' => $model->idboleto)),
    array('label' => 'Delete Boleto', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->idboleto), 'confirm' => 'Are you sure you want to delete this item?')),
    array('label' => 'Manage Boleto', 'url' => array('admin')),
);
?>

<h1>View Boleto #<?php echo $model->idboleto; ?></h1>

<?php
$this->widget('zii.widgets.CDetailView', array(
    'data' => $model,
    'attributes' => array(
        'idboleto',
        'numero_boleto',
        'tipo',
        'estado',
        'transaporte',
        'idventa',
        'idreserva_oficina',
        'idcompra',
        'idreserva',
    ),
));
?>
