<?php
/* @var $this AntecedentesController */
/* @var $model Antecedentes */
?>

<?php
$this->breadcrumbs=array(
	'Antecedentes'=>array('admin'),
	$model->ant_fecha=>array('view','id'=>$model->ant_correl),
	'Editar',
);

$this->menu=array(
    array('icon' => 'glyphicon glyphicon-tasks','label'=>'Cancelar', 'url'=>array('admin')),
);
?>

<?php echo BsHtml::pageHeader('Editar','Antecedentes '.$model->ant_fecha) ?>
<?php $this->renderPartial('_form', array('model'=>$model)); ?>