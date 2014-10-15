<?php
/* @var $this PacienteController */
/* @var $model Paciente */

$this->breadcrumbs=array(
	'Pacientes'=>array('admin'),
	$model->pac_id,
);

$this->menu=array(
	array('label'=>'Editar paciente', 'url'=>array('update', 'id'=>$model->pac_id)),
	array('label'=>'Borrar paciente', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->pac_id),'confirm'=>'¿Esta seguro de borrar este paciente?')),
	array('icon' => 'glyphicon glyphicon-plus-sign','label'=>'Ver antecedentes', 'url'=>array('//antecedentes/admin','id'=>$model->pac_id)),
	array('label'=>'Volver', 'url'=>array('admin')),
);
?>

<h1>Paciente #<?php echo $model->pac_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'pac_id',
		'pac_categoria',
		'pac_estado',
		//'pac_cam_id',
	),
)); ?>
