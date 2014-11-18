<?php
/* @var $this AntecedentesController */
/* @var $model Antecedentes */
$modelo= new paciente;
$modelo->pac_correl=$_GET['id'];
$modelo=paciente::model()->findByPk($modelo->pac_correl);
?>

<?php
$this->breadcrumbs=array(
	'Pacientes'=>array('//paciente/admin'),
	$modelo->pac_nombre." ".$modelo->pac_aPaterno=>array('//paciente/view','id'=>$modelo->pac_correl),
	'Antecedentes'=>array('admin','id'=>$modelo->pac_correl),
	$model->ant_fecha=>array('view','id'=>$model->ant_correl),
	'Editar',
);

$this->menu=array(
    array('icon' => 'glyphicon glyphicon-tasks','label'=>'Cancelar', 'url'=>array('admin','id'=>$modelo->pac_correl)),
);
?>

<?php echo BsHtml::pageHeader('Editar','Antecedentes '.$model->ant_fecha) ?>
<?php $this->renderPartial('_form', array('model'=>$model)); ?>