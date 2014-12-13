<?php
/* @var $this SalaController */
/* @var $model Sala */

$this->breadcrumbs=array(
	'Sala',
);

$this->menu=array(
	array('icon' => 'glyphicon glyphicon-plus-sign','label'=>'Agregar Sala', 'url'=>array('create')),
);
?>

<?php echo BsHtml::pageHeader('Administrar','Salas') ?>
<div class="panel panel-default">
    <div class="panel-body">
        <?php $this->widget('bootstrap.widgets.BsGridView',array(
			'id'=>'antecedentes-grid',
			'dataProvider'=>$model->search(),
			'filter'=>$model,
			'type'=>BsHtml::GRID_TYPE_BORDERED,
			'columns'=>array(
		//'sal_correl',
		'sal_numero',
		'sal_totalCamas',
		'sal_camasDisponibles',
		 array('name'=>'sal_are_correl',
		 	'value' =>'Area::model()->findByPk($data->sal_are_correl)->are_nombre',
		 	),
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
    </div>
</div>
