<?php
/* @var $this EspecialidadController */
/* @var $model Especialidad */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'especialidad-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'esp_nombre'); ?>
		<?php echo $form->textField($model,'esp_nombre',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'esp_nombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'esp_descripcion'); ?>
		<?php echo $form->textArea($model,'esp_descripcion',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'esp_descripcion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'esp_usu_correl'); ?>
		<?php echo $form->textField($model,'esp_usu_correl',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'esp_usu_correl'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->