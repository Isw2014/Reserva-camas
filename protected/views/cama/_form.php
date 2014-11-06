<?php
/* @var $this CamaController */
/* @var $model Cama */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'cama-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'cam_numero'); ?>
		<?php echo $form->textField($model,'cam_numero',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'cam_numero'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cam_estado'); ?>
		<?php echo $form->textField($model,'cam_estado',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'cam_estado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cam_sal_correl'); ?>
		<?php echo $form->textField($model,'cam_sal_correl',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'cam_sal_correl'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->