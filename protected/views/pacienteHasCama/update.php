<?php
/* @var $this PacienteHasCamaController */
/* @var $model PacienteHasCama */
$modelo= Paciente::model()->findByPk($model->pac_pac_correl);
$this->breadcrumbs=array(
		'Pacientes'=>array('//paciente/admin'),
	$modelo->pac_nombre." ".$modelo->pac_aPaterno=>array('//paciente/view','id'=>$modelo->pac_correl),
	'Hospitalizaciones'=>array('admin','id'=>$model->pac_pac_correl),
	$model->pac_cam_fechaInicio=>array('view','id'=>$model->pac_pac_correl,'id2'=>$model->cam_cam_correl),
	"Editar",
);

$this->menu=array(
	    array('icon' => 'glyphicon glyphicon-tasks','label'=>'Volver', 'url'=>array('view','id'=>$model->pac_pac_correl,'id2'=>$model->cam_cam_correl)),
);
?>

<?php echo BsHtml::pageHeader('Editar','Hospitalización'." ".$modelo->pac_nombre." ".$modelo->pac_aPaterno." ".$model->pac_cam_fechaInicio) ?>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>