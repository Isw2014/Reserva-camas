<!--<table class="table table-striped table-condensed table-bordered">


      <thead>
        <tr>
          
          <th>N° Pacientes</th>
          <th>Estado</th>
        </tr>
      </thead>

      
      <tbody>
<?php /*
$array=Paciente::model()->findAllByAttributes(array('pac_estado' => "Estable"));
$array2=Paciente::model()->findAllByAttributes(array('pac_estado' => "Grave"));
$array3=Paciente::model()->findAllByAttributes(array('pac_estado' => "Saludable"));
$array4=Paciente::model()->findAllByAttributes(array('pac_estado' => "Muerto"));
?>
        <tr>
          <td><?php echo count ($array);?></td>
          <td><?php echo "Estables"; ?></td>
        </tr>
        <tr>
          <td><?php echo count ($array2);?></td>
          <td><?php echo "Graves"; ?></td>
        </tr>
        <tr>
          <td><?php echo count ($array3);?></td>
          <td><?php echo "Saludables"; ?></td>
        </tr>
        <tr>
          <td><?php echo count ($array4);?></td>
          <td><?php echo "Muertos"; */?></td>
        </tr>
      </tbody>
    </table>
  -->

<?php $array=Paciente::model()->findAllByAttributes(array('pac_estado' => "Estable"));
      $array2=Paciente::model()->findAllByAttributes(array('pac_estado' => "Grave"));
      $array3=Paciente::model()->findAllByAttributes(array('pac_estado' => "Saludable"));
      $array4=Paciente::model()->findAllByAttributes(array('pac_estado' => "Muerto"));
      ?>
<?php
$pdf = Yii::createComponent('application.extensions.MPDF57.mpdf');

$html='
<link rel="stylesheet" type="text/css" href="'.Yii::app()->request->baseUrl.'/css/pdf.css" />

<table class="table table-striped table-condensed table-bordered">


      <thead>
        <tr>
          <th>N° Pacientes</th>
          <th>Estado</th>
        </tr>
      </thead>
      <tbody>
        

        <tr>
          <td>'.count ($array).'</td>
          <td>Estables</td>
        </tr>
        <tr>
          <td>'.count ($array2).'</td>
          <td>Graves</td>
        </tr>
        <tr>
          <td>'.count ($array3).'</td>
          <td>Saludables</td>
        </tr>
        <tr>
          <td>'.count ($array4).'</td>
          <td>Muertos</td>
        </tr>
      </tbody>
    </table>

';
$mpdf=new mPDF('win-1252','LETTER','','',15,15,25,12,5,7);
$mpdf->WriteHTML($html);
$mpdf->Output('holi-'.$array[1]->pac_correl.'.pdf','I');
exit;
?>