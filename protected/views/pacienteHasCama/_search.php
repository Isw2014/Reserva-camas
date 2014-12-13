<?php
/* @var $this PacienteHasCamaController */
/* @var $model PacienteHasCama */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'pac_pac_correl'); ?>
		<?php echo $form->textField($model,'pac_pac_correl',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cam_cam_correl'); ?>
		<?php echo $form->textField($model,'cam_cam_correl',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pac_cam_fechaInicio'); ?>
		<?php echo $form->textField($model,'pac_cam_fechaInicio'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pac_cam_fechaFin'); ?>
		<?php echo $form->textField($model,'pac_cam_fechaFin'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->