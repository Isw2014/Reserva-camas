<?php
/* @var $this AntecedentesController */
/* @var $model Antecedentes */


$this->breadcrumbs=array(
	'Antecedentes',
);

$this->menu=array(
	array('icon' => 'glyphicon glyphicon-plus-sign','label'=>'Agregar Antecedentes', 'url'=>array('create')),
);
?>

<?php echo BsHtml::pageHeader('Administrar','Antecedentes') ?>
<div class="panel panel-default">
    <div class="panel-body">
        <?php $this->widget('bootstrap.widgets.BsGridView',array(
			'id'=>'antecedentes-grid',
			'dataProvider'=>$model->search(),
			'filter'=>$model,
			'columns'=>array(
        		//'ant_correl',
				'ant_fecha',
				'ant_puntaje',
				'ant_pac_correl',
				array(
					'class'=>'bootstrap.widgets.BsButtonColumn',
				),
			),
        )); ?>
    </div>
</div>




