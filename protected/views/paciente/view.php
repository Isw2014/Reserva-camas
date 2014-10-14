<?php
/* @var $this PacienteController */
/* @var $model Paciente */

$this->breadcrumbs=array(
	'Pacientes'=>array('index'),
	$model->pac_id,
);

$this->menu=array(
	array('label'=>'List Paciente', 'url'=>array('index')),
	array('label'=>'Create Paciente', 'url'=>array('create')),
	array('label'=>'Update Paciente', 'url'=>array('update', 'id'=>$model->pac_id)),
	array('label'=>'Delete Paciente', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->pac_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Paciente', 'url'=>array('admin')),
);
?>

<h1>View Paciente #<?php echo $model->pac_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'pac_id',
		'pac_categoria',
		'pac_estado',
		'pac_cam_id',
	),
)); ?>
