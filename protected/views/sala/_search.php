<?php
/* @var $this SalaController */
/* @var $model Sala */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'sal_correl'); ?>
		<?php echo $form->textField($model,'sal_correl',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sal_numero'); ?>
		<?php echo $form->textField($model,'sal_numero',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sal_totalCamas'); ?>
		<?php echo $form->textField($model,'sal_totalCamas'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sal_camasDisponibles'); ?>
		<?php echo $form->textField($model,'sal_camasDisponibles'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sal_are_correl'); ?>
		<?php echo $form->textField($model,'sal_are_correl',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->