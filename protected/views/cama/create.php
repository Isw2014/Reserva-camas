<?php
/* @var $this CamaController */
/* @var $model Cama */

$this->breadcrumbs=array(
	'Camas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Cama', 'url'=>array('index')),
	array('label'=>'Manage Cama', 'url'=>array('admin')),
);
?>

<h1>Create Cama</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>