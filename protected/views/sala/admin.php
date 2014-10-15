<?php
/* @var $this SalaController */
/* @var $model Sala */

$this->breadcrumbs=array(
	'Administrar Salas',
);

$this->menu=array(
	array('label'=>'Agregar Sala', 'url'=>array('create')),
	array('label'=>'Volver a Inicio', 'url'=>array('site/index')),
);?>

<h1>Administrar Salas</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'sala-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		//'sal_id',
		'sal_numeroSala',
		'sal_camasTotales',
		'sal_camasLibres',
		
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
