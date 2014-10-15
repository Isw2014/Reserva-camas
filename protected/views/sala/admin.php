<?php
/* @var $this SalaController */
/* @var $model Sala */

$this->breadcrumbs=array(
	'Salas'=>array('index'),
	'Administrar Salas',
);

$this->menu=array(
	array('label'=>'Volver a Inicio', 'url'=>array('site/index')),
	array('label'=>'Lista de Salas', 'url'=>array('index')),
	array('label'=>'Agregar Sala', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#sala-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Salas</h1>

<!--<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>-->
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

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
