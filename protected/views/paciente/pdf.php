

<?php 
      $pacientes=Paciente::model()->findAll();
      $espe=Especialidad::model()->findAll();
      $array=array('id' ,'value');
      $i=0;
      foreach ($espe as $key) {
      $t=0;
        foreach($pacientes as $koi){
          if($koi->pac_esp_correl==$key->esp_correl){
            $t=$t+1;
          }
        }
        $array[$i]= array('id' => $key->esp_nombre,'value'=>$t);
        $i=$i+1;
      }
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
          <th>Especialidad</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td align="center">'.$array[0]['id'].'</td>
          <td align="center"><P ALIGN=center>'.$array[0]['value'].'</td>
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
