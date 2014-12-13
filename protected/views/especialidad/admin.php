<?php
/* @var $this EspecialidadController */
/* @var $model Especialidad */

$this->breadcrumbs=array(
	'Especialidades'
);

$this->menu=array(
	array('icon' => 'glyphicon glyphicon-plus-sign','label'=>'Agregar Especialidad', 'url'=>array('create')),
);
?>

<?php echo BsHtml::pageHeader('Administrar','Especialidad') ?>
<div class="panel panel-default">
    <div class="panel-body">
        <?php $this->widget('bootstrap.widgets.BsGridView',array(
			'id'=>'antecedentes-grid',
			'dataProvider'=>$model->search(),
			'filter'=>$model,
			'type'=>BsHtml::GRID_TYPE_BORDERED,
			'columns'=>array(
		//'esp_correl',
		'esp_nombre',
		'esp_descripcion',
		array(
			'class'=>'CButtonColumn',
		),
			),
        )); ?>
    </div>
</div>