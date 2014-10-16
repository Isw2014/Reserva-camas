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

	<p class="note">Campos con <span class="required">*</span> son obligatorios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'esp_nombre'); ?>
		<?php echo $form->textField($model,'esp_nombre',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'esp_nombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'esp_descripcion'); ?>
		<?php echo $form->textArea($model,'esp_descripcion',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'esp_descripcion'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->