<?php
/* @var $this EspecialidadController */
/* @var $model Especialidad */

$this->breadcrumbs=array(
	'Especialidades'=>array('index'),
	'Agregar',
);

$this->menu=array(
	array('label'=>'Lista de Especialidades', 'url'=>array('index')),
	array('label'=>'Administrar Especialidades', 'url'=>array('admin')),
);
?>

<h1>Agregar Especialidad</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>