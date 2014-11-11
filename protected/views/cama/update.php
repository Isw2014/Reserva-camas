<?php
/* @var $this CamaController */
/* @var $model Cama */
?>

<?php
$this->breadcrumbs=array(
	'Camas'=>array('admin'),
	$model->cam_numero=>array('view','id'=>$model->cam_correl),
	'Editar',
);

$this->menu=array(
    array('icon' => 'glyphicon glyphicon-tasks','label'=>'Cancelar', 'url'=>array('admin')),
);
?>

<?php echo BsHtml::pageHeader('Editar','Cama '.$model->cam_numero) ?>
<?php $this->renderPartial('_form', array('model'=>$model)); ?>