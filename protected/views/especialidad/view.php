<?php
/* @var $this EspecialidadController */
/* @var $model Especialidad */
?>

<?php
$this->breadcrumbs=array(
	'Especialidades'=>array('admin'),
	$model->esp_nombre,
);

$this->menu=array(
	array('icon' => 'glyphicon glyphicon-edit','label'=>'Editar Especialidad', 'url'=>array('update', 'id'=>$model->esp_correl)),
	array('icon' => 'glyphicon glyphicon-tasks','label'=>'Volver', 'url'=>array('admin')),
);
?>

<?php echo BsHtml::pageHeader('Detalle','Especialidad '.$model->esp_nombre) ?>

<?php $this->widget('zii.widgets.CDetailView',array(
	'htmlOptions' => array(
		'class' => 'table table-striped table-condensed table-hover',
	),
	'data'=>$model,
	'attributes'=>array(
		//'esp_correl',
		'esp_nombre',
		'esp_descripcion',
	),
)); ?>