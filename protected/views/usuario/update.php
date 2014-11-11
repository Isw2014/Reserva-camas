<?php
/* @var $this UsuarioController */
/* @var $model Usuario */
?>

<?php
$this->breadcrumbs=array(
	'Usuarios'=>array('admin'),
	$model->usu_usuario=>array('view','id'=>$model->usu_correl),
	'Editar',
);

$this->menu=array(
    array('icon' => 'glyphicon glyphicon-tasks','label'=>'Cancelar', 'url'=>array('admin')),
);
?>

<?php echo BsHtml::pageHeader('Editar','Usuario '.$model->usu_usuario) ?>
<?php $this->renderPartial('_form', array('model'=>$model)); ?>