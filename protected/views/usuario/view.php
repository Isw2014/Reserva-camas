<?php
/* @var $this UsuarioController */
/* @var $model Usuario */
?>

<?php
$this->breadcrumbs=array(
	'Usuarios'=>array('admin'),
	$model->usu_usuario,
);

$this->menu=array(
	array('icon' => 'glyphicon glyphicon-edit','label'=>'Editar Usuario', 'url'=>array('update', 'id'=>$model->usu_correl)),
	array('icon' => 'glyphicon glyphicon-minus-sign','label'=>'Borrar Usuario', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->usu_correl),'confirm'=>'Are you sure you want to delete this item?')),
    array('icon' => 'glyphicon glyphicon-tasks','label'=>'Volver', 'url'=>array('admin')),
);
?>

<?php echo BsHtml::pageHeader('Detalle','Usuario '.$model->usu_usuario) ?>

<?php $this->widget('zii.widgets.CDetailView',array(
	'htmlOptions' => array(
		'class' => 'table table-striped table-condensed table-hover',
	),
	'data'=>$model,
	'attributes'=>array(
		//'usu_correl',
		'usu_nombre',
		'usu_aPaterno',
		'usu_aMaterno',		
		'usu_rut',
		'usu_esp_correl',
		'usu_mail',
	),
)); ?>