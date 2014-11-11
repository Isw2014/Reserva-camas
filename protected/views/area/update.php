<?php
/* @var $this AreaController */
/* @var $model Area */
?>

<?php
$this->breadcrumbs=array(
	'Areas'=>array('admin'),
	$model->are_nombre=>array('view','id'=>$model->are_correl),
	'Editar',
);

$this->menu=array(
    array('icon' => 'glyphicon glyphicon-tasks','label'=>'Cancelar', 'url'=>array('admin')),
);
?>

<?php echo BsHtml::pageHeader('Editar','Area '.$model->are_nombre) ?>
<?php $this->renderPartial('_form', array('model'=>$model)); ?>