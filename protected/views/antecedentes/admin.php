<?php
/* @var $this AntecedentesController */
/* @var $model Antecedentes */

$this->breadcrumbs=array(
	'Pacientes'=>array('//paciente/admin'),
	'antecedentes'
);

$this->menu=array(
	array('label'=>'Agregar Antecedentes', 'url'=>array('create')),
	array('label'=>'Volver', 'url'=>array('//paciente/admin')),
);?>

<h1>Administrar antecedentes</h1>

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
		/*
		'ant_id',
		'ant_control',
		'ant_balance',
		'ant_cuidadoOxigenoterapia',
		'ant_cuidadoAereo',
		'ant_intervenciones',
		'ant_cuidadoPiel',
		'ant_tratamiento',
		'ant_presenciaElementos',
		'ant_pac_id',
		'ant_cambioRopa',
		'ant_movilizacion',
		'ant_cuidadosAlimentacion',
		'ant_cuidadosEliminacion',
		'ant_apoyo',
		'ant_vigilancia',
		*/
		'ant_fecha',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
