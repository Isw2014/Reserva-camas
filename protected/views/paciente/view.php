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
	array('icon' => 'glyphicon glyphicon-tasks','label'=>'Hospitalizaciones', 'url'=>array('//pacienteHasCama/admin','id'=>$model->pac_correl)),
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
		'pac_categoria',
		'pac_rut',
		array('name'=>'Especialidad',
		'value'=>especialidad::model()->findByPk($model->pac_esp_correl)->esp_nombre,
			),
	),
)); ?>