<?php
/* @var $this PacienteHasCamaController */
/* @var $model PacienteHasCama */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'paciente-has-cama-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'pac_pac_correl'); ?>
		<?php echo $form->textField($model,'pac_pac_correl',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'pac_pac_correl'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cam_cam_correl'); ?>
		<?php echo $form->textField($model,'cam_cam_correl',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'cam_cam_correl'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pac_cam_fechaInicio'); ?>
		<?php echo $form->textField($model,'pac_cam_fechaInicio'); ?>
		<?php echo $form->error($model,'pac_cam_fechaInicio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pac_cam_fechaFin'); ?>
		<?php echo $form->textField($model,'pac_cam_fechaFin'); ?>
		<?php echo $form->error($model,'pac_cam_fechaFin'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->