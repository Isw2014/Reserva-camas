<?php
/* @var $this RiesgoController */
/* @var $model Riesgo */

$this->breadcrumbs=array(
	'Riesgos'=>array('index'),
	$model->rie_id=>array('view','id'=>$model->rie_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Riesgo', 'url'=>array('index')),
	array('label'=>'Create Riesgo', 'url'=>array('create')),
	array('label'=>'View Riesgo', 'url'=>array('view', 'id'=>$model->rie_id)),
	array('label'=>'Manage Riesgo', 'url'=>array('admin')),
);
?>

<h1>Update Riesgo <?php echo $model->rie_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>