<?php
/* @var $this CamaController */
/* @var $model Cama */

$this->breadcrumbs=array(
	'Camas'=>array('index'),
	$model->cam_id=>array('view','id'=>$model->cam_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Cama', 'url'=>array('index')),
	array('label'=>'Create Cama', 'url'=>array('create')),
	array('label'=>'View Cama', 'url'=>array('view', 'id'=>$model->cam_id)),
	array('label'=>'Manage Cama', 'url'=>array('admin')),
);
?>

<h1>Update Cama <?php echo $model->cam_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>