<?php
/* @var $this CamaController */
/* @var $model Cama */

$this->breadcrumbs=array(
	'Camas'=>array('index'),
	$model->cam_correl,
);

$this->menu=array(
	array('label'=>'List Cama', 'url'=>array('index')),
	array('label'=>'Create Cama', 'url'=>array('create')),
	array('label'=>'Update Cama', 'url'=>array('update', 'id'=>$model->cam_correl)),
	array('label'=>'Delete Cama', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->cam_correl),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Cama', 'url'=>array('admin')),
);
?>

<h1>View Cama #<?php echo $model->cam_correl; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'cam_correl',
		'cam_numero',
		'cam_estado',
		'cam_sal_correl',
	),
)); ?>
