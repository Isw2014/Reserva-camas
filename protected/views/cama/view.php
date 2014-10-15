<?php
/* @var $this CamaController */
/* @var $model Cama */

$this->breadcrumbs=array(
	'Camas'=>array('index'),
	$model->cam_id,
);

$this->menu=array(
	//array('label'=>'Volver a Administrar', 'url'=>array('index')),
	array('label'=>'Actualizar Cama', 'url'=>array('update', 'id'=>$model->cam_id)),
	array('label'=>'Eliminar Cama', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->cam_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Volver', 'url'=>array('admin')),
);
?>

<h1>Detalles Cama #<?php echo $model->cam_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'cam_id',
		'cam_numero',
		'cam_estado',
		//'cam_sal_id',
	),
)); ?>
