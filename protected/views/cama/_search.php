<?php
/* @var $this CamaController */
/* @var $model Cama */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<!--<div class="row">
		<?php echo $form->label($model,'cam_id'); ?>
		<?php echo $form->textField($model,'cam_id',array('size'=>10,'maxlength'=>10)); ?>
	</div>-->

	<div class="row">
		<?php echo $form->label($model,'cam_numero'); ?>
		<?php echo $form->textField($model,'cam_numero',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cam_estado'); ?>
		<?php echo $form->textField($model,'cam_estado',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cam_sal_id'); ?>
		<?php echo $form->textField($model,'cam_sal_id',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Buscar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->