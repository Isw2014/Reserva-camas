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

	<p class="note">Campos con <span class="required">*</span> son obligatorios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'cam_numero'); ?>
		<?php echo $form->textField($model,'cam_numero',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'cam_numero'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cam_estado'); ?>
		<?php echo $form->textField($model,'cam_estado',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'cam_estado'); ?>
	</div>

	<!--<div class="row">
		<?php echo $form->labelEx($model,'cam_sal_id'); ?>
		<?php echo $form->textField($model,'cam_sal_id',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'cam_sal_id'); ?>
	</div>
-->

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Agregar' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->