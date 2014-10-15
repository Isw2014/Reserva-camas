<?php
/* @var $this CamaController */
/* @var $model Cama */

$this->breadcrumbs=array(
	'Camas'=>array('admin'),
	'Administrar Camas',
);

$this->menu=array(
	//array('label'=>'Lista Cama', 'url'=>array('index')),
	array('label'=>'Agregar Camas', 'url'=>array('create')),
	array('label'=>'Volver', 'url'=>array('//sala/admin')),
	
);?>

<h1>Administrar Camas</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'cama-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		//'cam_id',
		'cam_numero',
		'cam_estado',
		//'cam_sal_id',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
