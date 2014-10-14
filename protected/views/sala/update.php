<?php
/* @var $this SalaController */
/* @var $model Sala */

$this->breadcrumbs=array(
	'Salas'=>array('index'),
	$model->sal_id=>array('view','id'=>$model->sal_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Sala', 'url'=>array('index')),
	array('label'=>'Create Sala', 'url'=>array('create')),
	array('label'=>'View Sala', 'url'=>array('view', 'id'=>$model->sal_id)),
	array('label'=>'Manage Sala', 'url'=>array('admin')),
);
?>

<h1>Update Sala <?php echo $model->sal_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>