<?php
/* @var $this AntecedentesController */
/* @var $model Antecedentes */
$modelo= new Paciente;
$model->ant_correl=$_GET['id'];
$model=Antecedentes::model()->findByPk($model->ant_correl);
$modelo=Paciente::model()->findByPk($model->ant_pac_correl);
?>
<?php
$this->breadcrumbs=array(
	'Pacientes'=>array('//paciente/admin'),
	$modelo->pac_nombre." ".$modelo->pac_aPaterno=>array('//paciente/view','id'=>$modelo->pac_correl),
	'Antecedentes'=>array('admin','id'=>$modelo->pac_correl),
	$model->ant_fecha,
);

$this->menu=array(
	array('icon' => 'glyphicon glyphicon-edit','label'=>'Editar Antecedentes', 'url'=>array('update', 'id'=>$model->ant_correl)),
	array('icon' => 'glyphicon glyphicon-minus-sign','label'=>'Eliminar Antecedentes', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ant_correl),'confirm'=>'Are you sure you want to delete this item?')),
    array('icon' => 'glyphicon glyphicon-tasks','label'=>'Volver', 'url'=>array('admin','id'=>$modelo->pac_correl)),
);
?>

<?php echo BsHtml::pageHeader('Detalle','Antecedentes '.$model->ant_fecha) ?>

<?php $this->widget('zii.widgets.CDetailView',array(
	'htmlOptions' => array(
		'class' => 'table table-striped table-condensed table-hover',
	),
	'data'=>$model,
	'attributes'=>array(
		'ant_fecha',
		'ant_puntaje',
		array('name'=>'Paciente',
		'value'=>Paciente::model()->findByPk($model->ant_pac_correl)->pac_nombre." ".Paciente::model()->findByPk($model->ant_pac_correl)->pac_aPaterno,
			),
	),
)); ?>

<?php
$array =ItemsHasAntecedentes::model()->findAllByAttributes(array('ant_ant_correl'=>$model->ant_correl));
if(ItemsHasAntecedentes::model()->findByAttributes(array('ant_ant_correl'=>$model->ant_correl)))
	echo BsHtml::pageHeader(' ','Evaluación ');
?>

<table class="table table-striped table-condensed table-bordered">
      <tbody>
<?php 
echo BsHtml::pageHeader(' ','Categorización por Dependencia ');
$ite= new Items;
foreach ($array as $key) :?>
        <tr>
        	<?php 
        	if ((Items::model()->findByPk($key->ite_ite_correl)->ite_tipo)=="Dependencia"){
        		$ite= Items::model()->findByPk($key->ite_ite_correl);
        		echo "<td> $ite->ite_nombre </td>";	
        		echo "<td>$key->ant_ite_puntaje</td>";
        	}
        	?>
        </tr>
<?php endforeach; ?>
      </tbody>
    </table>

    <table class="table table-striped table-condensed table-bordered">
      <tbody>
<?php 
echo BsHtml::pageHeader(' ','Categorización por Riesgos ');
$ite= new Items;
foreach ($array as $key) :?>
        <tr>
        	<?php 
        	if ((Items::model()->findByPk($key->ite_ite_correl)->ite_tipo)=="Riesgo"){
        		$ite= Items::model()->findByPk($key->ite_ite_correl);
        		echo "<td> $ite->ite_nombre </td>";	
        		echo "<td>$key->ant_ite_puntaje</td>";
        	}
        	?>
        </tr>
<?php endforeach; ?>
      </tbody>
    </table>