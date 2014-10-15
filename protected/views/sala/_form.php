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

	<p class="note">Campos con <span class="required">*</span> son obligatorios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'sal_camasTotales'); ?>
		<?php echo $form->textField($model,'sal_camasTotales'); ?>
		<?php echo $form->error($model,'sal_camasTotales'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sal_camasLibres'); ?>
		<?php echo $form->textField($model,'sal_camasLibres'); ?>
		<?php echo $form->error($model,'sal_camasLibres'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sal_numeroSala'); ?>
		<?php echo $form->textField($model,'sal_numeroSala',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'sal_numeroSala'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Agregar' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->