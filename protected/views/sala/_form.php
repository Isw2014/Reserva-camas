<?php
/* @var $this SalaController */
/* @var $model Sala */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'sala-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'sal_numero'); ?>
		<?php echo $form->textField($model,'sal_numero',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'sal_numero'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sal_totalCamas'); ?>
		<?php echo $form->textField($model,'sal_totalCamas'); ?>
		<?php echo $form->error($model,'sal_totalCamas'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sal_camasDisponibles'); ?>
		<?php echo $form->textField($model,'sal_camasDisponibles'); ?>
		<?php echo $form->error($model,'sal_camasDisponibles'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sal_are_correl'); ?>
		<?php echo $form->textField($model,'sal_are_correl',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'sal_are_correl'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->