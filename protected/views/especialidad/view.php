<?php
/* @var $this EspecialidadController */
/* @var $model Especialidad */

$this->breadcrumbs=array(
	'Especialidads'=>array('index'),
	$model->esp_correl,
);

$this->menu=array(
	array('label'=>'List Especialidad', 'url'=>array('index')),
	array('label'=>'Create Especialidad', 'url'=>array('create')),
	array('label'=>'Update Especialidad', 'url'=>array('update', 'id'=>$model->esp_correl)),
	array('label'=>'Delete Especialidad', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->esp_correl),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Especialidad', 'url'=>array('admin')),
);
?>

<h1>View Especialidad #<?php echo $model->esp_correl; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'esp_correl',
		'esp_nombre',
		'esp_descripcion',
		'esp_usu_correl',
	),
)); ?>
