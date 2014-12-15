<?php
/* @var $this PacienteHasCamaController */
/* @var $model PacienteHasCama */
$modelo= Paciente::model()->findByPk($_GET['id']);
$this->breadcrumbs=array(
		'Pacientes'=>array('//paciente/admin'),
	$modelo->pac_nombre." ".$modelo->pac_aPaterno=>array('//paciente/view','id'=>$modelo->pac_correl),
	'Hospitalizaciones'=>array('admin','id'=>$modelo->pac_correl),
	"Agregar",
);

$this->menu=array(
	array('icon' => 'glyphicon glyphicon-tasks','label'=>'Cancelar', 'url'=>array('admin','id'=>$modelo->pac_correl)),
);
?>

<?php echo BsHtml::pageHeader('Agregar','Hospitalización') ?>


<?php $this->renderPartial('_form', array('model'=>$model)); ?>