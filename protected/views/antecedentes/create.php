<?php
/* @var $this AntecedentesController */
/* @var $model Antecedentes */
?>

<?php
$this->breadcrumbs=array(
	'Antecedentes'=>array('admin'),
	'Agregar',
);

$this->menu=array(
	array('icon' => 'glyphicon glyphicon-tasks','label'=>'Cancelar', 'url'=>array('admin')),
);
?>

<?php echo BsHtml::pageHeader('Agregar','Antecedentes') ?>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>