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
	array('label'=>'Cancelar', 'url'=>array('admin')),
);
?>

<h1>Actualizar Cama <?php echo $model->cam_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>