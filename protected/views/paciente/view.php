<?php
/* @var $this PacienteController */
/* @var $model Paciente */
?>

<?php
$this->breadcrumbs=array(
	'Pacientes'=>array('admin'),
	$model->pac_nombre." ".$model->pac_aPaterno,
);

$this->menu=array(
	array('icon' => 'glyphicon glyphicon-tasks','label'=>'Antecedentes', 'url'=>array('//antecedentes/admin','id'=>$model->pac_correl)),
    array('icon' => 'glyphicon glyphicon-tasks','label'=>'Editar', 'url'=>array('update','id'=>$model->pac_correl)),
    array('icon' => 'glyphicon glyphicon-tasks','label'=>'Volver', 'url'=>array('admin')),
);
?>

<?php echo BsHtml::pageHeader('Detalle','Paciente '.$model->pac_nombre." ".$model->pac_aPaterno) ?>

<?php $this->widget('zii.widgets.CDetailView',array(
	'htmlOptions' => array(
		'class' => 'table table-striped table-condensed table-hover',
	),
	'data'=>$model,
	'attributes'=>array(
		//'pac_correl',
		'pac_nombre',
		'pac_aPaterno',
		'pac_aMaterno',
		'pac_estado',
		'pac_puntaje',
		'pac_rut',
		array('name'=>'Especialidad',
		'value'=>especialidad::model()->findByPk($model->pac_esp_correl)->esp_nombre,
			),
		array('name'=>'Sala',
		'value'=>sala::model()->findByPk($model->pac_sal_correl)->sal_numero,
			),
		array('name'=>'Cama',
		'value'=>cama::model()->findByPk($model->pac_cam_correl)->cam_numero,
			),
	),
)); ?>