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

	<p class="help-block">Campos con <span class="required">*</span> son obligatorios.</p>


	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'pac_esp_nombre'); ?>
		<?php echo $form->textField($model,'pac_esp_nombre',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'pac_esp_nombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pac_estado'); ?>
		<?php echo $form->textField($model,'pac_estado',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'pac_estado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pac_cam_id'); ?>
		<?php echo $form->textField($model,'pac_cam_id',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'pac_cam_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Agregar' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->