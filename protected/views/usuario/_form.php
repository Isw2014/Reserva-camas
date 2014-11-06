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

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'usu_nombre'); ?>
		<?php echo $form->textField($model,'usu_nombre',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'usu_nombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'usu_aPaterno'); ?>
		<?php echo $form->textField($model,'usu_aPaterno',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'usu_aPaterno'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'usu_aMaterno'); ?>
		<?php echo $form->textField($model,'usu_aMaterno',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'usu_aMaterno'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'usu_usuario'); ?>
		<?php echo $form->textField($model,'usu_usuario',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'usu_usuario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'usu_clave'); ?>
		<?php echo $form->textField($model,'usu_clave',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'usu_clave'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'usu_rut'); ?>
		<?php echo $form->textField($model,'usu_rut',array('size'=>12,'maxlength'=>12)); ?>
		<?php echo $form->error($model,'usu_rut'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'usu_mail'); ?>
		<?php echo $form->textField($model,'usu_mail',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'usu_mail'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->