<?php
/* @var $this SalaController */
/* @var $model Sala */
?>

<?php
$this->breadcrumbs=array(
	'Salas'=>array('admin'),
	$model->sal_numero=>array('view','id'=>$model->sal_correl),
	'Editar',
);

$this->menu=array(
    array('icon' => 'glyphicon glyphicon-tasks','label'=>'Cancelar', 'url'=>array('admin')),
);
?>

<?php echo BsHtml::pageHeader('Editar','Sala '.$model->sal_numero) ?>
<?php $this->renderPartial('_form', array('model'=>$model)); ?>