<?php
/* @var $this AntecedentesController */
/* @var $model Antecedentes */

$this->breadcrumbs=array(
	'Antecedentes'=>array('index'),
	$model->ant_id=>array('view','id'=>$model->ant_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Antecedentes', 'url'=>array('index')),
	array('label'=>'Create Antecedentes', 'url'=>array('create')),
	array('label'=>'View Antecedentes', 'url'=>array('view', 'id'=>$model->ant_id)),
	array('label'=>'Manage Antecedentes', 'url'=>array('admin')),
);
?>

<h1>Update Antecedentes <?php echo $model->ant_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>