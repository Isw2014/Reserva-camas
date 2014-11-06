<?php
/* @var $this AntecedentesController */
/* @var $model Antecedentes */

$this->breadcrumbs=array(
	'Antecedentes'=>array('index'),
	$model->ant_correl,
);

$this->menu=array(
	array('label'=>'List Antecedentes', 'url'=>array('index')),
	array('label'=>'Create Antecedentes', 'url'=>array('create')),
	array('label'=>'Update Antecedentes', 'url'=>array('update', 'id'=>$model->ant_correl)),
	array('label'=>'Delete Antecedentes', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ant_correl),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Antecedentes', 'url'=>array('admin')),
);
?>

<h1>View Antecedentes #<?php echo $model->ant_correl; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ant_correl',
		'ant_fecha',
		'ant_pac_correl',
	),
)); ?>
