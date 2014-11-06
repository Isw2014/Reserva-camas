<?php
/* @var $this AreaController */
/* @var $model Area */

$this->breadcrumbs=array(
	'Areas'=>array('index'),
	$model->are_correl=>array('view','id'=>$model->are_correl),
	'Update',
);

$this->menu=array(
	array('label'=>'List Area', 'url'=>array('index')),
	array('label'=>'Create Area', 'url'=>array('create')),
	array('label'=>'View Area', 'url'=>array('view', 'id'=>$model->are_correl)),
	array('label'=>'Manage Area', 'url'=>array('admin')),
);
?>

<h1>Update Area <?php echo $model->are_correl; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>