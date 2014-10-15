<?php
/* @var $this UsuarioController */
/* @var $model Usuario */

$this->breadcrumbs=array(
	'Lista de Usuarios'=>array('index'),
	$model->usu_id,
);

$this->menu=array(
	array('label'=>'Volver a Inicio', 'url'=>array('site/index')),
	array('label'=>'Lista de Usuarios', 'url'=>array('index')),
	array('label'=>'Agregar Usuario', 'url'=>array('create')),
	array('label'=>'Actualizar Usuario', 'url'=>array('update', 'id'=>$model->usu_id)),
	array('label'=>'Borrar Usuario', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->usu_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Usuarios', 'url'=>array('admin')),
);
?>

<h1>Detalles de Usuario #<?php echo $model->usu_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'usu_id',
		'usu_nombre',
		'usu_apellidoMat',
		'usu_apellidoPat',
		'usu_rut',
		'usu_especialidad',
		'usu_password',
		'usu_username',
	),
)); ?>
