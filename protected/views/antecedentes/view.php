<?php
/* @var $this AntecedentesController */
/* @var $model Antecedentes */

$this->breadcrumbs=array(
	'Antecedentes'=>array('index'),
	$model->ant_id,
);

$this->menu=array(
	array('label'=>'List Antecedentes', 'url'=>array('index')),
	array('label'=>'Create Antecedentes', 'url'=>array('create')),
	array('label'=>'Update Antecedentes', 'url'=>array('update', 'id'=>$model->ant_id)),
	array('label'=>'Delete Antecedentes', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ant_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Antecedentes', 'url'=>array('admin')),
);
?>

<h1>View Antecedentes #<?php echo $model->ant_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ant_id',
		'ant_control',
		'ant_balance',
		'ant_cuidadoOxigenoterapia',
		'ant_cuidadoAereo',
		'ant_intervenciones',
		'ant_cuidadoPiel',
		'ant_tratamiento',
		'ant_presenciaElementos',
		'ant_fecha',
		'ant_pac_id',
		'ant_cambioRopa',
		'ant_movilizacion',
		'ant_cuidadosAlimentacion',
		'ant_cuidadosEliminacion',
		'ant_apoyo',
		'ant_vigilancia',
	),
)); ?>
