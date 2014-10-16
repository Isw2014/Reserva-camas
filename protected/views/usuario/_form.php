<?php
/* @var $this UsuarioController */
/* @var $model Usuario */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'usuario-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos con <span class="required">*</span> son obligatorios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'usu_nombre'); ?>
		<?php echo $form->textField($model,'usu_nombre',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'usu_nombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'usu_apellidoMat'); ?>
		<?php echo $form->textField($model,'usu_apellidoMat',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'usu_apellidoMat'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'usu_apellidoPat'); ?>
		<?php echo $form->textField($model,'usu_apellidoPat',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'usu_apellidoPat'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'usu_rut'); ?>
		<?php echo $form->textField($model,'usu_rut',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'usu_rut'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'usu_esp_nombre'); ?>
		<?php echo $form->textField($model,'usu_esp_nombre',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'usu_esp_nombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'usu_password'); ?>
		<?php echo $form->textField($model,'usu_password',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'usu_password'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'usu_username'); ?>
		<?php echo $form->textField($model,'usu_username',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'usu_username'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Agregar' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->