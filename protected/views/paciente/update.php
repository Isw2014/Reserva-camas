<?php
/* @var $this PacienteController */
/* @var $model Paciente */
?>

<?php
$this->breadcrumbs=array(
	'Pacientes'=>array('index'),
	$model->pac_correl=>array('view','id'=>$model->pac_correl),
	'Update',
);

$this->menu=array(
    array('icon' => 'glyphicon glyphicon-list','label'=>'List Paciente', 'url'=>array('index')),
	array('icon' => 'glyphicon glyphicon-plus-sign','label'=>'Create Paciente', 'url'=>array('create')),
    array('icon' => 'glyphicon glyphicon-list-alt','label'=>'View Paciente', 'url'=>array('view', 'id'=>$model->pac_correl)),
    array('icon' => 'glyphicon glyphicon-tasks','label'=>'Manage Paciente', 'url'=>array('admin')),
);
?>

<?php echo BsHtml::pageHeader('Update','Paciente '.$model->pac_correl) ?>
<?php $this->renderPartial('_form', array('model'=>$model)); ?>