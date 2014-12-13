<?php
/* @var $this ItemsController */
/* @var $model Items */

$this->breadcrumbs=array(
	'Items',
);

$this->menu=array(
	array('icon' => 'glyphicon glyphicon-plus-sign','label'=>'Agregar Item', 'url'=>array('create')),
	array('icon' => 'glyphicon glyphicon-plus-sign','label'=>'Volver', 'url'=>array('site/index')),
);
?>

<?php echo BsHtml::pageHeader('Administrar','Items') ?>
<div class="panel panel-default">
    <div class="panel-body">
        <?php $this->widget('bootstrap.widgets.BsGridView',array(
			'id'=>'antecedentes-grid',
			'dataProvider'=>$model->search(),
			'filter'=>$model,
			'type'=>BsHtml::GRID_TYPE_BORDERED,
			'columns'=>array(
		//'ite_correl',
		'ite_nombre',
		'ite_estado',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
    </div>
</div>
