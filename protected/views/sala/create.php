<?php
/* @var $this SalaController */
/* @var $model Sala */
?>

<?php
$this->breadcrumbs=array(
	'Salas'=>array('admin'),
	'Agregar',
);

$this->menu=array(
	array('icon' => 'glyphicon glyphicon-tasks','label'=>'Cancelar', 'url'=>array('admin')),
);
?>

<?php echo BsHtml::pageHeader('Agregar','Sala') ?>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>