<?php
/* @var $this AntecedentesController */
/* @var $model Antecedentes */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'antecedentes-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'ant_control'); ?>
		<?php echo $form->textField($model,'ant_control'); ?>
		<?php echo $form->error($model,'ant_control'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ant_balance'); ?>
		<?php echo $form->textField($model,'ant_balance'); ?>
		<?php echo $form->error($model,'ant_balance'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ant_cuidadoOxigenoterapia'); ?>
		<?php echo $form->textField($model,'ant_cuidadoOxigenoterapia'); ?>
		<?php echo $form->error($model,'ant_cuidadoOxigenoterapia'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ant_cuidadoAereo'); ?>
		<?php echo $form->textField($model,'ant_cuidadoAereo'); ?>
		<?php echo $form->error($model,'ant_cuidadoAereo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ant_intervenciones'); ?>
		<?php echo $form->textField($model,'ant_intervenciones'); ?>
		<?php echo $form->error($model,'ant_intervenciones'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ant_cuidadoPiel'); ?>
		<?php echo $form->textField($model,'ant_cuidadoPiel'); ?>
		<?php echo $form->error($model,'ant_cuidadoPiel'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ant_tratamiento'); ?>
		<?php echo $form->textField($model,'ant_tratamiento'); ?>
		<?php echo $form->error($model,'ant_tratamiento'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ant_presenciaElementos'); ?>
		<?php echo $form->textField($model,'ant_presenciaElementos'); ?>
		<?php echo $form->error($model,'ant_presenciaElementos'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ant_fecha'); ?>
		<?php echo $form->textField($model,'ant_fecha'); ?>
		<?php echo $form->error($model,'ant_fecha'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ant_pac_id'); ?>
		<?php echo $form->textField($model,'ant_pac_id',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'ant_pac_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ant_cambioRopa'); ?>
		<?php echo $form->textField($model,'ant_cambioRopa'); ?>
		<?php echo $form->error($model,'ant_cambioRopa'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ant_movilizacion'); ?>
		<?php echo $form->textField($model,'ant_movilizacion'); ?>
		<?php echo $form->error($model,'ant_movilizacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ant_cuidadosAlimentacion'); ?>
		<?php echo $form->textField($model,'ant_cuidadosAlimentacion'); ?>
		<?php echo $form->error($model,'ant_cuidadosAlimentacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ant_cuidadosEliminacion'); ?>
		<?php echo $form->textField($model,'ant_cuidadosEliminacion'); ?>
		<?php echo $form->error($model,'ant_cuidadosEliminacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ant_apoyo'); ?>
		<?php echo $form->textField($model,'ant_apoyo'); ?>
		<?php echo $form->error($model,'ant_apoyo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ant_vigilancia'); ?>
		<?php echo $form->textField($model,'ant_vigilancia'); ?>
		<?php echo $form->error($model,'ant_vigilancia'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->