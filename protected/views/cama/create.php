<?php
/* @var $this CamaController */
/* @var $model Cama */

$this->breadcrumbs=array(
	'Camas'=>array('index'),
	'Agregar',
);

$this->menu=array(
	//array('label'=>'List Cama', 'url'=>array('index')),
	array('label'=>'Volver a Inicio', 'url'=>array('site/index')),
);
?>

<h1>Agregar Cama</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>