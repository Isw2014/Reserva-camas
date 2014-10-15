<?php
/* @var $this SalaController */
/* @var $model Sala */

$this->breadcrumbs=array(
	'Salas'=>array('index'),
	$model->sal_id,
);

$this->menu=array(
	array('label'=>'Actualizar Sala', 'url'=>array('update', 'id'=>$model->sal_id)),
	array('label'=>'Borrar Sala', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->sal_id),'confirm'=>'¿Esta seguro de borrar esta sala?')),
	array('label'=>'Ver Camas', 'url'=>array('//cama/admin', 'id'=>$model->sal_id)),
	array('label'=>'Volver', 'url'=>array('admin')),
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
