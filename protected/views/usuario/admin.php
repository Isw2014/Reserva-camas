<?php
/* @var $this UsuarioController */
/* @var $model Usuario */

$this->breadcrumbs=array(
	'Usuarios',
);

$this->menu=array(
	array('icon' => 'glyphicon glyphicon-plus-sign','label'=>'Agregar Usuario', 'url'=>array('create')),
);
?>
<?php echo BsHtml::pageHeader('Administrar','Usuarios') ?>
<div class="panel panel-default">
    <div class="panel-body">
        <?php $this->widget('bootstrap.widgets.BsGridView',array(
			'id'=>'antecedentes-grid',
			'dataProvider'=>$model->search(),
			'filter'=>$model,
			'columns'=>array(
		'usu_correl',
		'usu_nombre',
		'usu_aPaterno',
		'usu_aMaterno',			
		'usu_rut',
		'usu_esp_correl',
		'usu_mail',
		
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
    </div>
</div>
