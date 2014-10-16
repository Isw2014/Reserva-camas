<?php
/* @var $this EspecialidadController */
/* @var $model Especialidad */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>



	<div class="row">
		<?php echo $form->label($model,'esp_nombre'); ?>
		<?php echo $form->textField($model,'esp_nombre',array('size'=>45,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'esp_descripcion'); ?>
		<?php echo $form->textArea($model,'esp_descripcion',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Buscar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->