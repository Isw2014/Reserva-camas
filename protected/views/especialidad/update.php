<?php
/* @var $this EspecialidadController */
/* @var $model Especialidad */

$this->breadcrumbs=array(
	'Especialidads'=>array('index'),
	$model->esp_correl=>array('view','id'=>$model->esp_correl),
	'Update',
);

$this->menu=array(
	array('label'=>'List Especialidad', 'url'=>array('index')),
	array('label'=>'Create Especialidad', 'url'=>array('create')),
	array('label'=>'View Especialidad', 'url'=>array('view', 'id'=>$model->esp_correl)),
	array('label'=>'Manage Especialidad', 'url'=>array('admin')),
);
?>

<h1>Update Especialidad <?php echo $model->esp_correl; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>