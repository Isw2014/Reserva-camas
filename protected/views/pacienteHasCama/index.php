<?php
/* @var $this PacienteHasCamaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Paciente Has Camas',
);

$this->menu=array(
	array('label'=>'Create PacienteHasCama', 'url'=>array('create')),
	array('label'=>'Manage PacienteHasCama', 'url'=>array('admin')),
);
?>

<h1>Paciente Has Camas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
