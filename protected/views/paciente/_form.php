<?php
/* @var $this PacienteController */
/* @var $model Paciente */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'paciente-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'pac_nombre'); ?>
		<?php echo $form->textField($model,'pac_nombre',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'pac_nombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pac_aPaterno'); ?>
		<?php echo $form->textField($model,'pac_aPaterno',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'pac_aPaterno'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pac_aMaterno'); ?>
		<?php echo $form->textField($model,'pac_aMaterno',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'pac_aMaterno'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pac_estado'); ?>
		<?php echo $form->textField($model,'pac_estado',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'pac_estado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pac_puntaje'); ?>
		<?php echo $form->textField($model,'pac_puntaje'); ?>
		<?php echo $form->error($model,'pac_puntaje'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pac_rut'); ?>
		<?php echo $form->textField($model,'pac_rut',array('size'=>12,'maxlength'=>12)); ?>
		<?php echo $form->error($model,'pac_rut'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pac_esp_correl'); ?>
		<?php echo $form->textField($model,'pac_esp_correl',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'pac_esp_correl'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pac_cam_correl'); ?>
		<?php echo $form->textField($model,'pac_cam_correl',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'pac_cam_correl'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->