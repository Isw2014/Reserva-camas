<?php
/* @var $this AntecedentesController */
/* @var $model Antecedentes */

$this->breadcrumbs=array(
	'Paciente'=>array('//paciente/admin'),
	'Antecedentes'=>array('admin'),
	'Agregar',
);

$this->menu=array(
	array('label'=>'Cancelar', 'url'=>array('admin')),
);
?>

<h1>Agregar Antecedentes</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>