<?php
/* @var $this SalaController */
/* @var $model Sala */

$this->breadcrumbs=array(
	'Salas'=>array('index'),
	$model->sal_id,
);

$this->menu=array(
	array('label'=>'List Sala', 'url'=>array('index')),
	array('label'=>'Create Sala', 'url'=>array('create')),
	array('label'=>'Update Sala', 'url'=>array('update', 'id'=>$model->sal_id)),
	array('label'=>'Delete Sala', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->sal_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Sala', 'url'=>array('admin')),
);
?>

<h1>View Sala #<?php echo $model->sal_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'sal_id',
		'sal_camasTotales',
		'sal_camasLibres',
		'sal_numeroSala',
	),
)); ?>
