<?php
/* @var $this EspecialidadController */
/* @var $model Especialidad */

$this->breadcrumbs=array(
	'Especialidades'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Lista de Especialidades', 'url'=>array('index')),
	array('label'=>'Agregar Especialidad', 'url'=>array('create')),
	array('label'=>'Volver', 'url'=>array('site/index')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#especialidad-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Especialidades</h1>


<!--<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>-->
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'especialidad-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		//'esp_id',
		'esp_nombre',
		'esp_descripcion',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
