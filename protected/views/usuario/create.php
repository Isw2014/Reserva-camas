<?php
/* @var $this UsuarioController */
/* @var $model Usuario */

$this->breadcrumbs=array(
	'Usuarios'=>array('index'),
	'Agregar',
);

$this->menu=array(
	array('label'=>'Volver a Inicio', 'url'=>array('site/index')),
	array('label'=>'Lista de Usuarios', 'url'=>array('index')),
	array('label'=>'Administrar Usuarios', 'url'=>array('admin')),
);
?>

<h1>Agregar Usuario</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>