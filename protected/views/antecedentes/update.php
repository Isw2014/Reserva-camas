<?php
/* @var $this AntecedentesController */
/* @var $model Antecedentes */

$this->breadcrumbs=array(
	'Antecedentes'=>array('admin'),
	$model->ant_id=>array('view','id'=>$model->ant_id),
	'Editar',
);

$this->menu=array(
	array('label'=>' Cancelar', 'url'=>array('admin')),
);
?>

<h1>Editar Antecedentes <?php echo $model->ant_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>