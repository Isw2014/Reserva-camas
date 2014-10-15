<?php
/* @var $this CamaController */
/* @var $model Cama */

$this->breadcrumbs=array(
	'Camas'=>array('index'),
	'Administrar Camas',
);

$this->menu=array(
	//array('label'=>'Lista Cama', 'url'=>array('index')),
	array('label'=>'Volver a Inicio', 'url'=>array('site/index')),
	array('label'=>'Agregar Camas', 'url'=>array('create')),
	
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#cama-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Camas</h1>

<!--<?php echo CHtml::link('Busqueda Avanzada','#',array('class'=>'search-button')); ?>-->
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?> 

</div>

<!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'cama-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		//'cam_id',
		'cam_numero',
		'cam_estado',
		'cam_sal_id',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
