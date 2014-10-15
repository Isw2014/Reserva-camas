<?php
/* @var $this UsuarioController */
/* @var $model Usuario */

$this->breadcrumbs=array(
	'Usuarios'=>array('index'),
	'Administrar Usuarios',
);

$this->menu=array(
	array('label'=>'Volver a Inicio', 'url'=>array('site/index')),
	array('label'=>'Lista de Usuario', 'url'=>array('index')),
	array('label'=>'Agregar Usuario', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#usuario-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Usuarios</h1>


<!--<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>-->
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'usuario-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		//'usu_id',
		'usu_nombre',
		'usu_apellidoMat',
		'usu_apellidoPat',
		'usu_rut',
		'usu_especialidad',
		/*
		'usu_password',
		'usu_username',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
