<?php
/* @var $this AntecedentesController */
/* @var $model Antecedentes */

$modelo= new paciente;
$modelo->pac_correl=$_GET['id'];
$modelo=paciente::model()->findByPk($modelo->pac_correl);

$this->breadcrumbs=array(
	'Pacientes'=>array('//paciente/admin'),
	$modelo->pac_nombre." ".$modelo->pac_aPaterno=>array('//paciente/view','id'=>$modelo->pac_correl),
	'Antecedentes',
);

$this->menu=array(
	array('icon' => 'glyphicon glyphicon-plus-sign','label'=>'Agregar Antecedentes', 'url'=>array('create','id'=>$modelo->pac_correl)),
	array('icon' => 'glyphicon glyphicon-plus-sign','label'=>'Volver', 'url'=>array('//paciente/view','id'=>$modelo->pac_correl)),
);
?>

<?php echo BsHtml::pageHeader('Administrar','Antecedentes') ?>
<div class="panel panel-default">
    <div class="panel-body">
        <?php $this->widget('bootstrap.widgets.BsGridView',array(
			'id'=>'antecedentes-grid',
			'dataProvider'=>$model->search(),
			'filter'=>$model,
			'type'=>BsHtml::GRID_TYPE_BORDERED,
			'columns'=>array(
        		//'ant_correl',
				'ant_fecha',
				'ant_puntaje',
				//'ant_pac_correl',
				array(
						'class'=>'CButtonColumn',
				),
			),
        )); ?>
    </div>
</div>




