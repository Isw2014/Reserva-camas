<?php
/* @var $this AntecedentesController */
/* @var $model Antecedentes */
$modelo=new Paciente();
$modelo->pac_id=$_GET['id'];

$this->breadcrumbs=array(
	'Pacientes'=>array('//paciente/admin'),
	$modelo->pac_id=>array('//paciente/view','id'=>$modelo->pac_id),
	'antecedentes'
);

$this->menu=array(
	array('label'=>'Agregar Antecedentes', 'url'=>array('create','id'=>$modelo->pac_id)),
	array('label'=>'Volver', 'url'=>array('//paciente/admin')),
);?>

<h1>Administrar antecedentes</h1>


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
