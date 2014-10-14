<?php
/* @var $this CamaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Camas',
);

$this->menu=array(
	array('label'=>'Create Cama', 'url'=>array('create')),
	array('label'=>'Manage Cama', 'url'=>array('admin')),
);
?>

<h1>Camas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
