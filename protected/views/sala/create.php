<?php
/* @var $this SalaController */
/* @var $model Sala */

$this->breadcrumbs=array(
	'Salas'=>array('index'),
	'Agregar',
);

$this->menu=array(
	array('label'=>'Cancelar', 'url'=>array('admin')),
);
?>

<h1>Agregar Sala</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>