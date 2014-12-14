<?php
/* @var $this PacienteHasCamaController */
/* @var $model PacienteHasCama */
$modelo= Paciente::model()->findByPk($model->pac_pac_correl);

$this->breadcrumbs=array(
	'Pacientes'=>array('//paciente/admin'),
	$modelo->pac_nombre." ".$modelo->pac_aPaterno=>array('//paciente/view','id'=>$modelo->pac_correl),
	'Hospitalizaciones'=>array('admin','id'=>$model->pac_pac_correl),
	$model->pac_cam_fechaInicio,
);

$this->menu=array(
	array('icon' => 'glyphicon glyphicon-tasks','label'=>'Editar', 'url'=>array('update','id'=>$model->pac_pac_correl,'id2'=>$model->cam_cam_correl)),
    array('icon' => 'glyphicon glyphicon-tasks','label'=>'Volver', 'url'=>array('admin','id'=>$model->pac_pac_correl)),
);
?>

<?php echo BsHtml::pageHeader('Detalle',$model->pac_cam_fechaInicio) ?>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		array('name'=>"Paciente",
			'value'=>$modelo->pac_nombre." ".$modelo->pac_aPaterno
			),
		array('name'=>"Cama",
			'value'=>Cama::model()->findByPk($model->cam_cam_correl)->cam_numero
			),
		'pac_cam_fechaInicio',
		'pac_cam_fechaFin',
	),
)); ?>
