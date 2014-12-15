<?php
/* @var $this CamaController */
/* @var $model Cama */
?>

<?php
$this->breadcrumbs=array(
	'Camas'=>array('admin'),
	$model->cam_numero,
);

$this->menu=array(
	array('icon' => 'glyphicon glyphicon-edit','label'=>'Editar Cama', 'url'=>array('update', 'id'=>$model->cam_correl)),
	array('icon' => 'glyphicon glyphicon-tasks','label'=>'Volver', 'url'=>array('admin')),
);
?>

<?php echo BsHtml::pageHeader('Detalle','Cama '.$model->cam_numero) ?>

<?php $this->widget('zii.widgets.CDetailView',array(
	'htmlOptions' => array(
		'class' => 'table table-striped table-condensed table-hover',
	),
	'data'=>$model,
	'attributes'=>array(
		//'cam_correl',
		'cam_numero',
		'cam_estado',
		array('name'=>"Sala",
			'value'=>((Sala::model()->findByPk($model->cam_sal_correl)->sal_numero)
			)),
	),
)); ?>