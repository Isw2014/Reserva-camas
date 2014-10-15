<?php
/* @var $this UsuarioController */
/* @var $model Usuario */

$this->breadcrumbs=array(
	'Usuarios'=>array('index'),
	$model->usu_id=>array('view','id'=>$model->usu_id),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Volver a Inicio', 'url'=>array('site/index')),
	array('label'=>'Lista de Usuarios', 'url'=>array('index')),
	array('label'=>'Agregar Usuario', 'url'=>array('create')),
	array('label'=>'Detalles de Usuario', 'url'=>array('view', 'id'=>$model->usu_id)),
	array('label'=>'Administrar Usuario', 'url'=>array('admin')),
);
?>

<h1>Actualizar Usuario <?php echo $model->usu_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>