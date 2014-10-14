<?php
/* @var $this RiesgoController */
/* @var $model Riesgo */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'riesgo-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'rie_control'); ?>
		<?php echo $form->textField($model,'rie_control'); ?>
		<?php echo $form->error($model,'rie_control'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'rie_balance'); ?>
		<?php echo $form->textField($model,'rie_balance'); ?>
		<?php echo $form->error($model,'rie_balance'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'rie_cuidadoOxigenoterapia'); ?>
		<?php echo $form->textField($model,'rie_cuidadoOxigenoterapia'); ?>
		<?php echo $form->error($model,'rie_cuidadoOxigenoterapia'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'rie_cuidadoAereo'); ?>
		<?php echo $form->textField($model,'rie_cuidadoAereo'); ?>
		<?php echo $form->error($model,'rie_cuidadoAereo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'rie_intervenciones'); ?>
		<?php echo $form->textField($model,'rie_intervenciones'); ?>
		<?php echo $form->error($model,'rie_intervenciones'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'rie_cuidadoPiel'); ?>
		<?php echo $form->textField($model,'rie_cuidadoPiel'); ?>
		<?php echo $form->error($model,'rie_cuidadoPiel'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'rie_tratamiento'); ?>
		<?php echo $form->textField($model,'rie_tratamiento'); ?>
		<?php echo $form->error($model,'rie_tratamiento'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'rie_presenciaElementos'); ?>
		<?php echo $form->textField($model,'rie_presenciaElementos'); ?>
		<?php echo $form->error($model,'rie_presenciaElementos'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'rie_fecha'); ?>
		<?php echo $form->textField($model,'rie_fecha'); ?>
		<?php echo $form->error($model,'rie_fecha'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'rie_pac_id'); ?>
		<?php echo $form->textField($model,'rie_pac_id',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'rie_pac_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->