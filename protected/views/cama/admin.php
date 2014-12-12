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
			'columns'=>array(
		//'cam_correl',
		'cam_numero',
		'cam_estado',
		'cam_sal_correl',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
    </div>
</div>