<?php
/* @var $this DependenciaController */
/* @var $model Dependencia */

$this->breadcrumbs=array(
	'Dependencias'=>array('index'),
	$model->dep_id,
);

$this->menu=array(
	array('label'=>'List Dependencia', 'url'=>array('index')),
	array('label'=>'Create Dependencia', 'url'=>array('create')),
	array('label'=>'Update Dependencia', 'url'=>array('update', 'id'=>$model->dep_id)),
	array('label'=>'Delete Dependencia', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->dep_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Dependencia', 'url'=>array('admin')),
);
?>

<h1>View Dependencia #<?php echo $model->dep_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'dep_id',
		'dep_cambioRopa',
		'dep_movilizacion',
		'dep_cuidadosAlimentacion',
		'dep_cuidadosEliminacion',
		'dep_apoyo',
		'dep_vigilancia',
		'dep_fecha',
		'dep_pac_id',
	),
)); ?>
