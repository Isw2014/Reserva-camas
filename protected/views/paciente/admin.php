<?php
/* @var $this PacienteController */
/* @var $model Paciente */

$this->breadcrumbs=array(
	'Pacientes',
);

?>

<?php echo BsHtml::pageHeader('Administrar','Pacientes') ?>
<div class="panel panel-default">
    <div class="panel-body">
        <?php $this->widget('bootstrap.widgets.BsGridView',array(
			'id'=>'antecedentes-grid',
			'dataProvider'=>$model->search(),
			'filter'=>$model,
			'type'=>BsHtml::GRID_TYPE_BORDERED,
			'columns'=>array(
		//'pac_correl',
		'pac_nombre',
		'pac_aPaterno',
		'pac_aMaterno',
		'pac_estado',
		'pac_puntaje',
		'pac_rut',
		//'pac_esp_correl',
		'pac_cam_correl',
		'pac_sal_correl',
				array(
					'class'=>'CButtonColumn',
				),
			),
        )); ?>
    </div>
</div>