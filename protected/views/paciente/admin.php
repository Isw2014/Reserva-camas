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
		array('name'=>'pac_esp_correl',
		 	'value' =>'Especialidad::model()->findByPk($data->pac_esp_correl)->esp_nombre',
		 	),
		//array('name'=>'pac_sal_correl',
		 //	'value' =>'Sala::model()->findByPk($data->pac_sal_correl)->sal_numero',
		 	//),
				array(
					'class'=>'CButtonColumn',
				),
			),
        )); ?>
    </div>
</div>