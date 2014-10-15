<?php
/* @var $this SalaController */
/* @var $model Sala */

$this->breadcrumbs=array(
	'Salas'=>array('index'),
	$model->sal_id=>array('view','id'=>$model->sal_id),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Volver a Home', 'url'=>array('site/index')),
	array('label'=>'Lista de Salas', 'url'=>array('index')),
	array('label'=>'Agregar Sala', 'url'=>array('create')),
	array('label'=>'Detalles Sala', 'url'=>array('view', 'id'=>$model->sal_id)),
	array('label'=>'Administrar Salas', 'url'=>array('admin')),
);
?>

<h1>Actualizar Sala <?php echo $model->sal_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>