<?php
/* @var $this AntecedentesController */
/* @var $model Antecedentes */

$this->breadcrumbs=array(
	'Antecedentes'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Antecedentes', 'url'=>array('index')),
	array('label'=>'Create Antecedentes', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#antecedentes-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Antecedentes</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'antecedentes-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'ant_id',
		'ant_control',
		'ant_balance',
		'ant_cuidadoOxigenoterapia',
		'ant_cuidadoAereo',
		'ant_intervenciones',
		/*
		'ant_cuidadoPiel',
		'ant_tratamiento',
		'ant_presenciaElementos',
		'ant_fecha',
		'ant_pac_id',
		'ant_cambioRopa',
		'ant_movilizacion',
		'ant_cuidadosAlimentacion',
		'ant_cuidadosEliminacion',
		'ant_apoyo',
		'ant_vigilancia',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
