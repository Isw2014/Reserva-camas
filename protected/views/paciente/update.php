<?php
/* @var $this PacienteController */
/* @var $model Paciente */

$this->breadcrumbs=array(
	'Pacientes'=>array('index'),
	$model->pac_id=>array('view','id'=>$model->pac_id),
	'Editar',
);

$this->menu=array(
	array('label'=>'Cancelar', 'url'=>array('view', 'id'=>$model->pac_id)),
);
?>

<h1>Editar Paciente <?php echo $model->pac_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>