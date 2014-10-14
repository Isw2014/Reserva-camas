<?php
/* @var $this RiesgoController */
/* @var $model Riesgo */

$this->breadcrumbs=array(
	'Riesgos'=>array('index'),
	$model->rie_id,
);

$this->menu=array(
	array('label'=>'List Riesgo', 'url'=>array('index')),
	array('label'=>'Create Riesgo', 'url'=>array('create')),
	array('label'=>'Update Riesgo', 'url'=>array('update', 'id'=>$model->rie_id)),
	array('label'=>'Delete Riesgo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->rie_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Riesgo', 'url'=>array('admin')),
);
?>

<h1>View Riesgo #<?php echo $model->rie_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'rie_id',
		'rie_control',
		'rie_balance',
		'rie_cuidadoOxigenoterapia',
		'rie_cuidadoAereo',
		'rie_intervenciones',
		'rie_cuidadoPiel',
		'rie_tratamiento',
		'rie_presenciaElementos',
		'rie_fecha',
		'rie_pac_id',
	),
)); ?>
