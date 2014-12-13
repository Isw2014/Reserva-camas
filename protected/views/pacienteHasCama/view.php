<?php
/* @var $this PacienteHasCamaController */
/* @var $model PacienteHasCama */
$modelo= new paciente;
$modelo->pac_correl=$_GET['id'];
$modelo=paciente::model()->findByPk($modelo->pac_correl);

$this->breadcrumbs=array(
	'Pacientes'=>array('//paciente/admin'),
	$modelo->pac_nombre." ".$modelo->pac_aPaterno=>array('//paciente/view','id'=>$modelo->pac_correl),
	'Hospitalizaciones'=>array('admin'),
);

$this->menu=array(
	array('icon' => 'glyphicon glyphicon-tasks','label'=>'Editar', 'url'=>array('update','id'=>$model->pac_pac_correl,'id2'=>$model->cam_cam_correl)),
    array('icon' => 'glyphicon glyphicon-tasks','label'=>'Volver', 'url'=>array('admin')),
);
?>

<h1>View PacienteHasCama #<?php echo $model->pac_pac_correl; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'pac_pac_correl',
		'cam_cam_correl',
		'pac_cam_fechaInicio',
		'pac_cam_fechaFin',
	),
)); ?>
