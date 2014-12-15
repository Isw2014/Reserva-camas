<?php
/* @var $this CamaController */
/* @var $model Cama */

$this->breadcrumbs=array(
	'Camas',
);

$this->menu=array(
	array('icon' => 'glyphicon glyphicon-plus-sign','label'=>'Agregar Cama', 'url'=>array('create')),
);

?>





<?php echo BsHtml::pageHeader('Administrar','Camas') ?>
<div class="panel panel-default">
    <div class="panel-body">
        <?php $this->widget('bootstrap.widgets.BsGridView',array(
			'id'=>'antecedentes-grid',
			'dataProvider'=>$model->search(),
			'filter'=>$model,
			'type'=>BsHtml::GRID_TYPE_BORDERED,
			'columns'=>array(
		//'cam_correl',
		'cam_numero',
		'cam_estado',
		array('name'=>'cam_sal_correl',
		 	'value' =>'Sala::model()->findByPk($data->cam_sal_correl)->sal_numero',
		 	),
		array(
			'class'=>'CButtonColumn',
			'template' => '{view}{update}',
		),
	),
)); ?>
    </div>
</div>