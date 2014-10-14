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
		<?php echo $form->label($model,'sal_id'); ?>
		<?php echo $form->textField($model,'sal_id',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sal_camasTotales'); ?>
		<?php echo $form->textField($model,'sal_camasTotales'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sal_camasLibres'); ?>
		<?php echo $form->textField($model,'sal_camasLibres'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sal_numeroSala'); ?>
		<?php echo $form->textField($model,'sal_numeroSala',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->