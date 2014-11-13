<?php
/* @var $this AntecedentesController */
/* @var $model Antecedentes */
?>

<?php
$this->breadcrumbs=array(
	'Antecedentes'=>array('admin'),
	$model->ant_fecha,
);

$this->menu=array(
	array('icon' => 'glyphicon glyphicon-edit','label'=>'Editar Antecedentes', 'url'=>array('update', 'id'=>$model->ant_correl)),
	array('icon' => 'glyphicon glyphicon-minus-sign','label'=>'Eliminar Antecedentes', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ant_correl),'confirm'=>'Are you sure you want to delete this item?')),
    array('icon' => 'glyphicon glyphicon-tasks','label'=>'Volver', 'url'=>array('admin')),
);
?>

<?php echo BsHtml::pageHeader('Detalle','Antecedentes '.$model->ant_fecha) ?>

<?php $this->widget('zii.widgets.CDetailView',array(
	'htmlOptions' => array(
		'class' => 'table table-striped table-condensed table-hover',
	),
	'data'=>$model,
	'attributes'=>array(
		//'ant_correl',
		'ant_fecha',
		'ant_puntaje',
		'ant_pac_correl',
	),
)); ?>