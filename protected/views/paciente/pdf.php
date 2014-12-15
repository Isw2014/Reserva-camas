

<?php $array=Paciente::model()->findAllByAttributes(array('pac_estado' => "Estable"));
      $array2=Paciente::model()->findAllByAttributes(array('pac_estado' => "Grave"));
      $array3=Paciente::model()->findAllByAttributes(array('pac_estado' => "Saludable"));
      $array4=Paciente::model()->findAllByAttributes(array('pac_estado' => "Muerto"));
      ?>
<?php
$pdf = Yii::createComponent('application.extensions.MPDF57.mpdf');
$html='
<link rel="stylesheet" type="text/css" href="'.Yii::app()->request->baseUrl.'/css/pdf.css" />
<link rel="stylesheet" type="text/css" href="'.Yii::app()->request->baseUrl.'/css/bootstrap.css" />
<body>
  <h1><P ALIGN=center>Informe de Pacientes</h1>';
$html.='

 <table class="table table-striped table-condensed table-bordered">
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
    <div> '.BsHtml::pageHeader('Detalle','Antecedentes').'</div>
</body>
';
$header='<div><center><img src="'.Yii::app()->request->baseUrl.'/css/bg.GIF"/ height="145" width="100%"></center></div>';
$mpdf=new mPDF('win-1252','LETTER','','',15,15,25,12,5,7);
$mpdf->WriteHTML($stylesheet,1);
$mpdf->WriteHTML($html);
$mpdf->WriteHTML($header);

$mpdf->Output('Pacientes'.'.pdf','I');
exit;
?>
