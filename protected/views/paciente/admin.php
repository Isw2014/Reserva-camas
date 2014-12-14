<?php
/* @var $this PacienteController */
/* @var $model Paciente */

$this->breadcrumbs=array(
	'Pacientes',
);

$this->menu=array(
	array('icon' => 'glyphicon glyphicon-plus-sign','label'=>'Informes', 'url'=>array('pdf')),
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
                    'template' => '{view}{update}{pdf}',
                	'buttons'=>array(
                        'pdf' => array(
                                'label'=>'Generar PDF', 
                                'url'=>"CHtml::normalizeUrl(array('pdf','id'=>\$data->pac_correl))",
                                'imageUrl'=>Yii::app()->request->baseUrl.'/images/pdf_icon.png', 
                                'options' => array('class'=>'pdf'),
                        		),
                			),
        				),
					),
				)
        ); ?>
    </div>
</div>

