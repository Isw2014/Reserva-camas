<?php
/* @var $this SalaController */
/* @var $model Sala */

$this->breadcrumbs=array(
	'Salas'=>array('index'),
	$model->sal_id,
);

$this->menu=array(
	array('label'=>'Volver a Home', 'url'=>array('site/index')),
	array('label'=>'Lista de Salas', 'url'=>array('index')),
	array('label'=>'Agregar Sala', 'url'=>array('create')),
	array('label'=>'Actualizar Sala', 'url'=>array('update', 'id'=>$model->sal_id)),
	array('label'=>'Borrar Sala', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->sal_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Sala', 'url'=>array('admin')),
);
?>

<h1>Detalles Sala #<?php echo $model->sal_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'sal_id',
		'sal_camasTotales',
		'sal_camasLibres',
		'sal_numeroSala',
	),
)); ?>
