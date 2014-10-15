<?php
/* @var $this SalaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Salas',
);

$this->menu=array(
	array('label'=>'Volver a Home', 'url'=>array('site/index')),
	array('label'=>'Agregar Sala', 'url'=>array('create')),
	array('label'=>'Administrar Salas', 'url'=>array('admin')),
);
?>

<h1>Lista de Salas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
