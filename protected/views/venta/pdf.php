<?php
$pdf = Yii::createComponent('application.extensions.mpdf60.mpdf');
  $modelboleto = Boleto::model()->findByPk($model->idboleto);
  $modelunidad = UnidadTransporte::model()->findByPk($modelboleto->transaporte);
   $modelhorario = HorarioViaje::model()->findByPk($modelunidad->idhorario_viaje);
  $modelruta = CatalogoRuta::model()->findByPk($modelhorario->idcatalogo_ruta);
$html='
<link rel="stylesheet" type="text/css" href="'.Yii::app()->request->baseUrl.'/css/form.css" />
 <tr class="principal"><td colspan="2" align="center"><b>Coopetaiva "Unión Cariamanga"</b><br><br><b>DATOS DEL BOLETO</b></td></tr>
    <hr>
<table i class="grid-view">
   
      
<tr class="success"><td> <b>Nombre: </b> </td><td> '.$model->nombre.'</td></tr>
    <tr class="success"><td> <b>Cédula: </b> </td><td> '.$model->cedula.'</td></tr>
    <tr class="success"><td> <b>Hora: </b> </td><td> '.$modelhorario->hora_salida.'</td></tr>
    <tr class="even"><td> <b>Fecha: </b> </td><td> '.$model->fecha.'</td></tr>
    <tr class="even"><td> <b>Asiento Nro.: </b> </td><td> '.$modelboleto->numero_boleto.'</td></tr>
    <tr class="even"><td> <b>Unidad Nro.: </b> </td><td> '.$modelunidad->numero_unidad.'</td></tr>
    <tr class="even"><td> <b>Placa Nro.: </b> </td><td> '.$modelunidad->placa.'</td></tr>
    <tr class="even"><td> <b>Ciudad Origen: </b> </td><td> '.$modelruta->ciudad_origen.'</td></tr>
    <tr class="even"><td> <b>Ciudad Destino: </b> </td><td> '.$modelruta->ciudad_destino.'</td></tr>
    <tr class="odd"><td> <b>Total: </b> </td><td> '.$model->total.'</td></tr>
    <tr class="odd"><td> <b>Estado: </b> </td><td>Pagado</td></tr>
        

</table>
   <hr>
';
$mpdf=new mPDF('win-1252','LETTER','','',15,15,25,12,5,7);
$mpdf->WriteHTML($html);
$mpdf->Output('Boleto-'.$model->idventa.'.pdf','D');
exit;
?>
<!--<tr class="odd"><td> <b>N° Control</b> </td><td> '.$model->num_control.'</td></tr>
<tr class="even"><td> <b>Trimestre Ejecucion</b> </td><td> '.$model->trimestre_ejecucion.'</td></tr>
<tr class="odd"><td> <b>Nombre Estado</b> </td><td> '.$model->estado0["nombre_estado"].'</td></tr>
<tr class="even"><td> <b>Empresa</b> </td><td> '.$model->empresa.'</td></tr>
<tr class="odd"><td> <b>Personal Actuante</b> </td><td> '.$model->personal_actuante.'</td></tr>
<tr class="even"><td> <b>Nombre Tipo Informe</b> </td><td> '.$model->informe0["nombre_tipo_informe"].'</td></tr>
<tr class="even"><td> <b>N° Contrato</b> </td><td> '.$model->num_contrato.'</td></tr>
<tr class="odd"><td> <b>Monto Contratado</b> </td><td> '.$model->monto_contratado.'</td></tr>
<tr class="even"><td> <b>Monto Auditado</b> </td><td> '.$model->monto_auditado.'</td></tr>
<tr class="odd"><td> <b>Porcentaje Ejecucion</b> </td><td> '.$model->porcentaje.'</td></tr>
<tr class="even"><td> <b>Objeto Contrato</b> </td><td> '.$model->objeto_contrato.'</td></tr>
<tr class="odd"><td> <b>Observaciones</b> </td><td> '.$model->observaciones.'</td></tr>
<tr class="even"><td> <b>Recomendaciones</b> </td><td> '.$model->recomendaciones.'</td></tr>
<tr class="odd"><td> <b>Monto Hallazgo</b> </td><td> '.$model->monto_hallazgo.'</td></tr>
<tr class="even"><td> <b>Origen Tramite</b> </td><td> '.$model->origen0["nombre_origen_tramite"].'</td></tr>-->