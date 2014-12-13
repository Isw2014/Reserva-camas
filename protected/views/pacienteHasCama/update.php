<?php
/* @var $this PacienteHasCamaController */
/* @var $model PacienteHasCama */

$this->breadcrumbs=array(
	'Paciente Has Camas'=>array('index'),
	$model->pac_pac_correl=>array('view','id'=>$model->pac_pac_correl),
	'Update',
);

$this->menu=array(
	array('label'=>'List PacienteHasCama', 'url'=>array('index')),
	array('label'=>'Create PacienteHasCama', 'url'=>array('create')),
	array('label'=>'View PacienteHasCama', 'url'=>array('view', 'id'=>$model->pac_pac_correl)),
	array('label'=>'Manage PacienteHasCama', 'url'=>array('admin')),
);
?>

<h1>Update PacienteHasCama <?php echo $model->pac_pac_correl; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>