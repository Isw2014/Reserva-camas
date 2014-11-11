<?php
/* @var $this SalaController */
/* @var $model Sala */
?>

<?php
$this->breadcrumbs=array(
	'Salas'=>array('admin'),
	$model->sal_numero,
);

$this->menu=array(
	array('icon' => 'glyphicon glyphicon-edit','label'=>'Editar Sala', 'url'=>array('update', 'id'=>$model->sal_correl)),
	array('icon' => 'glyphicon glyphicon-minus-sign','label'=>'Eliminar Sala', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->sal_correl),'confirm'=>'Are you sure you want to delete this item?')),
    array('icon' => 'glyphicon glyphicon-tasks','label'=>'Volver', 'url'=>array('admin')),
);
?>

<?php echo BsHtml::pageHeader('Detalle','Sala '.$model->sal_numero) ?>

<?php $this->widget('zii.widgets.CDetailView',array(
	'htmlOptions' => array(
		'class' => 'table table-striped table-condensed table-hover',
	),
	'data'=>$model,
	'attributes'=>array(
		//'sal_correl',
		'sal_numero',
		'sal_totalCamas',
		'sal_camasDisponibles',
		'sal_are_correl',
	),
)); ?>