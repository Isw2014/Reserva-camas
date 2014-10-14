<?php
/* @var $this DependenciaController */
/* @var $model Dependencia */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'dependencia-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'dep_cambioRopa'); ?>
		<?php echo $form->textField($model,'dep_cambioRopa'); ?>
		<?php echo $form->error($model,'dep_cambioRopa'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dep_movilizacion'); ?>
		<?php echo $form->textField($model,'dep_movilizacion'); ?>
		<?php echo $form->error($model,'dep_movilizacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dep_cuidadosAlimentacion'); ?>
		<?php echo $form->textField($model,'dep_cuidadosAlimentacion'); ?>
		<?php echo $form->error($model,'dep_cuidadosAlimentacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dep_cuidadosEliminacion'); ?>
		<?php echo $form->textField($model,'dep_cuidadosEliminacion'); ?>
		<?php echo $form->error($model,'dep_cuidadosEliminacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dep_apoyo'); ?>
		<?php echo $form->textField($model,'dep_apoyo'); ?>
		<?php echo $form->error($model,'dep_apoyo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dep_vigilancia'); ?>
		<?php echo $form->textField($model,'dep_vigilancia'); ?>
		<?php echo $form->error($model,'dep_vigilancia'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dep_fecha'); ?>
		<?php echo $form->textField($model,'dep_fecha'); ?>
		<?php echo $form->error($model,'dep_fecha'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dep_pac_id'); ?>
		<?php echo $form->textField($model,'dep_pac_id',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'dep_pac_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->