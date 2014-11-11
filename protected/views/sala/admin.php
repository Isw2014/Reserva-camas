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
			'columns'=>array(
		//'sal_correl',
		'sal_numero',
		'sal_totalCamas',
		'sal_camasDisponibles',
		'sal_are_correl',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
    </div>
</div>
