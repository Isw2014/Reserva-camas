<?php
/* @var $this PacienteHasCamaController */
/* @var $model PacienteHasCama */

$this->breadcrumbs=array(
	'Paciente Has Camas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List PacienteHasCama', 'url'=>array('index')),
	array('label'=>'Manage PacienteHasCama', 'url'=>array('admin')),
);
?>

<h1>Create PacienteHasCama</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>