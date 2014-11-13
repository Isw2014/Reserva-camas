<?php
/* @var $this PacienteController */
/* @var $model Paciente */
?>

<?php
$this->breadcrumbs=array(
	'Pacientes'=>array('admin'),
	$model->pac_nombre." ".$model->pac_aPaterno=>array('view','id'=>$model->pac_correl),
	'Editar',
);

$this->menu=array(
    array('icon' => 'glyphicon glyphicon-tasks','label'=>'Cancelar', 'url'=>array('view','id'=>$model->pac_correl)),
);
?>

<?php echo BsHtml::pageHeader('Editar','Paciente '.$model->pac_nombre." ".$model->pac_aPaterno) ?>
<?php $this->renderPartial('_form', array('model'=>$model)); ?>