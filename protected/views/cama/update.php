<?php
/* @var $this CamaController */
/* @var $model Cama */

$this->breadcrumbs=array(
	'Camas'=>array('index'),
	$model->cam_id=>array('view','id'=>$model->cam_id),
	'Actualizar',
);

$this->menu=array(
	//array('label'=>'Lista Camas', 'url'=>array('index')),
	array('label'=>'Volver a Inicio', 'url'=>array('site/index')),
	array('label'=>'Crear Cama', 'url'=>array('create')),
	array('label'=>'Ver Cama', 'url'=>array('view', 'id'=>$model->cam_id)),
	array('label'=>'Administrar Cama', 'url'=>array('admin')),
);
?>

<h1>Actualizar Cama <?php echo $model->cam_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>