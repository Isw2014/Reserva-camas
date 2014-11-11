<?php
/* @var $this EspecialidadController */
/* @var $model Especialidad */
?>

<?php
$this->breadcrumbs=array(
	'Especialidades'=>array('admin'),
	$model->esp_nombre=>array('view','id'=>$model->esp_correl),
	'Editar',
);

$this->menu=array(
    array('icon' => 'glyphicon glyphicon-tasks','label'=>'Cancelar', 'url'=>array('admin')),
);
?>

<?php echo BsHtml::pageHeader('Editar','Especialidad '.$model->esp_nombre) ?>
<?php $this->renderPartial('_form', array('model'=>$model)); ?>