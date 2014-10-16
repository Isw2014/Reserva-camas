<?php
/* @var $this EspecialidadController */
/* @var $model Especialidad */

$this->breadcrumbs=array(
	'Especialidads'=>array('index'),
	$model->esp_id=>array('view','id'=>$model->esp_id),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Lista de Especialidades', 'url'=>array('index')),
	array('label'=>'Agregar Especialidad', 'url'=>array('create')),
	array('label'=>'Detalles Especialidad', 'url'=>array('view', 'id'=>$model->esp_id)),
	array('label'=>'Administrar Especialidades', 'url'=>array('admin')),
);
?>

<h1>Actualización Especialidad <?php echo $model->esp_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>