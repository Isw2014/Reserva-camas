<?php
/* @var $this EspecialidadController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Especialidades',
);

$this->menu=array(
	array('label'=>'Agregar Especialidad', 'url'=>array('create')),
	array('label'=>'Administrar Especialidad', 'url'=>array('admin')),
);
?>

<h1>Especialidades</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
