<?php
$pdf = Yii::createComponent('application.extensions.mpdf60.mpdf');

$html='
<link rel="stylesheet" type="text/css" href="'.Yii::app()->request->baseUrl.'/css/pdf.css" />

<table id="yw0" class="detail-view2">
<tr class="principal">
<td colspan="2" align="center"><b>DATOS DEL CONTRATO</b></td>
<tr>

</table>

';
$mpdf=new mPDF('win-1252','LETTER','','',15,15,25,12,5,7);
$mpdf->WriteHTML($html);
$mpdf->Output('Ficha-Contrato-'.$model->idcompra.'.pdf','D');
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