<?php
/* @var $this PacienteController */
/* @var $model Paciente */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'pac_correl'); ?>
		<?php echo $form->textField($model,'pac_correl',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pac_nombre'); ?>
		<?php echo $form->textField($model,'pac_nombre',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pac_aPaterno'); ?>
		<?php echo $form->textField($model,'pac_aPaterno',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pac_aMaterno'); ?>
		<?php echo $form->textField($model,'pac_aMaterno',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pac_estado'); ?>
		<?php echo $form->textField($model,'pac_estado',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pac_puntaje'); ?>
		<?php echo $form->textField($model,'pac_puntaje'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pac_rut'); ?>
		<?php echo $form->textField($model,'pac_rut',array('size'=>12,'maxlength'=>12)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pac_esp_correl'); ?>
		<?php echo $form->textField($model,'pac_esp_correl',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pac_cam_correl'); ?>
		<?php echo $form->textField($model,'pac_cam_correl',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->