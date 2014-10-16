<?php
/* @var $this EspecialidadController */
/* @var $model Especialidad */

$this->breadcrumbs=array(
	'Especialidads'=>array('index'),
	$model->esp_id,
);

$this->menu=array(
	array('label'=>'Lista de Especialidades', 'url'=>array('index')),
	array('label'=>'Agregar Especialidad', 'url'=>array('create')),
	array('label'=>'Actualizar Especialidad', 'url'=>array('update', 'id'=>$model->esp_id)),
	array('label'=>'Eliminar Especialidad', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->esp_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Especialidades', 'url'=>array('admin')),
);
?>

<h1>Detalles Especialidad #<?php echo $model->esp_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'esp_id',
		'esp_nombre',
		'esp_descripcion',
	),
)); ?>
