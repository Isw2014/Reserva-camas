<?php
/* @var $this ItemsController */
/* @var $model Items */
?>

<?php
$this->breadcrumbs=array(
	'Items'=>array('admin'),
	'Agregar',
);

$this->menu=array(
	array('icon' => 'glyphicon glyphicon-tasks','label'=>'Cancelar', 'url'=>array('admin')),
);
?>

<?php echo BsHtml::pageHeader('Agregar','Items') ?>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>