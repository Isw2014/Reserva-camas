<?php
/* @var $this PacienteController */
/* @var $model Paciente */

$this->breadcrumbs=array(
	'Pacientes',
);

$this->menu=array(
	array('icon' => 'glyphicon glyphicon-plus-sign','label'=>'Agregar Paciente', 'url'=>array('create')),
	array('icon' => 'glyphicon glyphicon-plus-sign','label'=>'Volver', 'url'=>array('//site/index')),
);

?>

<h1>Administrar pacientes</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'paciente-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(		
		'pac_estado',
		'pac_esp_nombre',		
		array(
			'class'=>'CButtonColumn',
		),
	),
)
); 

?>
