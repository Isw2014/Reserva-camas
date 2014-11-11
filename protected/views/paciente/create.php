<?php
/* @var $this PacienteController */
/* @var $model Paciente */
?>

<?php
$this->breadcrumbs=array(
	'Pacientes'=>array('index'),
	'Create',
);

$this->menu=array(
    array('icon' => 'glyphicon glyphicon-list','label'=>'List Paciente', 'url'=>array('index')),
	array('icon' => 'glyphicon glyphicon-tasks','label'=>'Manage Paciente', 'url'=>array('admin')),
);
?>

<?php echo BsHtml::pageHeader('Create','Paciente') ?>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>