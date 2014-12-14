<?php
/* @var $this PacienteHasCamaController */
/* @var $model PacienteHasCama */

$modelo= new paciente;
$modelo->pac_correl=$_GET['id'];
$modelo=paciente::model()->findByPk($modelo->pac_correl);


$this->breadcrumbs=array(
	'Pacientes'=>array('//paciente/admin'),
	$modelo->pac_nombre." ".$modelo->pac_aPaterno=>array('//paciente/view','id'=>$modelo->pac_correl),
	'Hospitalizaciones',
);

$this->menu=array(
	array('icon' => 'glyphicon glyphicon-plus-sign','label'=>'Agregar Hospitalización', 'url'=>array('create','id'=>$modelo->pac_correl)),
	array('icon' => 'glyphicon glyphicon-plus-sign','label'=>'Volver', 'url'=>array('//paciente/view','id'=>$modelo->pac_correl)),
);
?>

<?php echo BsHtml::pageHeader('Administrar','Hospitalizaciones') ?>


<?php
//die(); 
$this->widget('bootstrap.widgets.BsGridView',array(
	'id'=>'paciente-has-cama-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'type'=>BsHtml::GRID_TYPE_BORDERED,
	'columns'=>array(
		//'pac_pac_correl',
		array('name'=>'cam_cam_correl',
		 	'value' =>'Cama::model()->findByPk($data->cam_cam_correl)->cam_numero',
		 	),
		'pac_cam_fechaInicio',
		'pac_cam_fechaFin',
		array(
			'class'=>'CButtonColumn',
			'template' => '{view}{delete}',
		),
	),
)); ?>
