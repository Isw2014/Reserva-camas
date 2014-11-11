<?php
/* @var $this CamaController */
/* @var $model Cama */
?>

<?php
$this->breadcrumbs=array(
	'Camas'=>array('admin'),
	'Agregar',
);

$this->menu=array(
	array('icon' => 'glyphicon glyphicon-tasks','label'=>'Cancelar', 'url'=>array('admin')),
);
?>

<?php echo BsHtml::pageHeader('Agregar','Cama') ?>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>