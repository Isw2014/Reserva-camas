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
    array('icon' => 'glyphicon glyphicon-tasks','label'=>'Cancelar', 'url'=>array('admin')),
);
?>

<?php echo BsHtml::pageHeader('Update','Items '.$model->ite_correl) ?>
<?php $this->renderPartial('_form', array('model'=>$model)); ?>