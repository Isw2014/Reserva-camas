<?php
/* @var $this ItemsController */
/* @var $model Items */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'ite_correl'); ?>
		<?php echo $form->textField($model,'ite_correl',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ite_nombre'); ?>
		<?php echo $form->textField($model,'ite_nombre',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ite_estado'); ?>
		<?php echo $form->textField($model,'ite_estado'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ite_ant_correl'); ?>
		<?php echo $form->textField($model,'ite_ant_correl',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->