<?php
/* @var $this ItemsController */
/* @var $model Items */
?>

<?php
$this->breadcrumbs=array(
	'Items'=>array('admin'),
	$model->ite_nombre=>array('view','id'=>$model->ite_correl),
	'Editar',
);

$this->menu=array(
    array('icon' => 'glyphicon glyphicon-tasks','label'=>'Cancelar', 'url'=>array('view','id'=>$model->ite_correl)),
);
?>

<?php echo BsHtml::pageHeader('Editar','Item '.$model->ite_nombre) ?>
<?php $this->renderPartial('_form', array('model'=>$model)); ?>