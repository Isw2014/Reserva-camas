<?php
/* @var $this PacienteController */
/* @var $model Paciente */

$this->breadcrumbs=array(
	'Pacientes'=>array('index'),
	$model->pac_correl,
);

$this->menu=array(
	array('label'=>'List Paciente', 'url'=>array('index')),
	array('label'=>'Create Paciente', 'url'=>array('create')),
	array('label'=>'Update Paciente', 'url'=>array('update', 'id'=>$model->pac_correl)),
	array('label'=>'Delete Paciente', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->pac_correl),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Paciente', 'url'=>array('admin')),
);
?>

<h1>View Paciente #<?php echo $model->pac_correl; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'pac_correl',
		'pac_nombre',
		'pac_aPaterno',
		'pac_aMaterno',
		'pac_estado',
		'pac_puntaje',
		'pac_rut',
		'pac_esp_correl',
		'pac_cam_correl',
	),
)); ?>
