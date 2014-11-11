<?php
/* @var $this EspecialidadController */
/* @var $model Especialidad */
?>

<?php
$this->breadcrumbs=array(
	'Especialidades'=>array('admin'),
	'Agregar',
);

$this->menu=array(
	array('icon' => 'glyphicon glyphicon-tasks','label'=>'Cancelar', 'url'=>array('admin')),
);
?>

<?php echo BsHtml::pageHeader('Agregar','Especialidad') ?>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>