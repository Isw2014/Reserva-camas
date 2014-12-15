<?php
/* @var $this ItemsController */
/* @var $model Items */
?>

<?php
$this->breadcrumbs=array(
	'Items'=>array('admin'),
	$model->ite_nombre,
);

$this->menu=array(
	array('icon' => 'glyphicon glyphicon-edit','label'=>'Editar Items', 'url'=>array('update', 'id'=>$model->ite_correl)),
	array('icon' => 'glyphicon glyphicon-tasks','label'=>'Volver', 'url'=>array('admin')),
);
?>

<?php echo BsHtml::pageHeader('Detalle','Items '.$model->ite_nombre) ?>

<?php $this->widget('zii.widgets.CDetailView',array(
	'htmlOptions' => array(
		'class' => 'table table-striped table-condensed table-hover',
	),
	'data'=>$model,
	'attributes'=>array(
		//'ite_correl',
		'ite_nombre',
		'ite_estado',
		'ite_tipo',
	),
)); ?>