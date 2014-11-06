<?php
/* @var $this ItemsController */
/* @var $model Items */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'items-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'ite_nombre'); ?>
		<?php echo $form->textField($model,'ite_nombre',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'ite_nombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ite_estado'); ?>
		<?php echo $form->textField($model,'ite_estado'); ?>
		<?php echo $form->error($model,'ite_estado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ite_ant_correl'); ?>
		<?php echo $form->textField($model,'ite_ant_correl',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'ite_ant_correl'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->