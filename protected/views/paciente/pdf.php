

<?php $array=Paciente::model()->findAllByAttributes(array('pac_estado' => "Estable"));
      $array2=Paciente::model()->findAllByAttributes(array('pac_estado' => "Grave"));
      $array3=Paciente::model()->findAllByAttributes(array('pac_estado' => "Saludable"));
      $array4=Paciente::model()->findAllByAttributes(array('pac_estado' => "Muerto"));
      ?>
<?php
$pdf = Yii::createComponent('application.extensions.MPDF57.mpdf');

$html='
<link rel="stylesheet" type="text/css" href="'.Yii::app()->request->baseUrl.'/css/pdf.css" />

<body>
  <h1><P ALIGN=center>Informe de Pacientes</h1>';
$html.='

 <table class="detail-view2" repeat_header="1" cellpadding="1" cellspacing="1" width="100%" border="0">
      <thead>
        <tr>
          <th>N° Pacientes</th>
          <th>Estado</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td align="center">'.count ($array).'</td>
          <td align="center"><P ALIGN=center>Estables</td>
        </tr>
        <tr>
          <td align="center">'.count ($array2).'</td>
          <td align="center">Graves</td>
        </tr>
        <tr>
          <td align="center">'.count ($array3).'</td>
          <td align="center">Saludables</td>
        </tr>
        <tr>
          <td align="center">'.count ($array4).'</td>
          <td align="center">Muertos</td>
        </tr>
      </tbody>
    </table>
</body>
';


$mpdf=new mPDF('win-1252','LETTER','','',15,15,25,12,5,7);
$mpdf->WriteHTML($stylesheet,1);
$mpdf->WriteHTML($html);

$mpdf->Output('Pacientes'.'.pdf','I');
exit;
?>
