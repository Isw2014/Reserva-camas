<?php
/* @var $this PacienteController */
/* @var $model Paciente */

$this->breadcrumbs=array(
	'Pacientes'=>array('index'),
	$model->pac_id=>array('view','id'=>$model->pac_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Paciente', 'url'=>array('index')),
	array('label'=>'Create Paciente', 'url'=>array('create')),
	array('label'=>'View Paciente', 'url'=>array('view', 'id'=>$model->pac_id)),
	array('label'=>'Manage Paciente', 'url'=>array('admin')),
);
?>

<h1>Update Paciente <?php echo $model->pac_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>