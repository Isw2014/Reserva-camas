<?php
/* @var $this RiesgoController */
/* @var $model Riesgo */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'rie_id'); ?>
		<?php echo $form->textField($model,'rie_id',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'rie_control'); ?>
		<?php echo $form->textField($model,'rie_control'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'rie_balance'); ?>
		<?php echo $form->textField($model,'rie_balance'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'rie_cuidadoOxigenoterapia'); ?>
		<?php echo $form->textField($model,'rie_cuidadoOxigenoterapia'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'rie_cuidadoAereo'); ?>
		<?php echo $form->textField($model,'rie_cuidadoAereo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'rie_intervenciones'); ?>
		<?php echo $form->textField($model,'rie_intervenciones'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'rie_cuidadoPiel'); ?>
		<?php echo $form->textField($model,'rie_cuidadoPiel'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'rie_tratamiento'); ?>
		<?php echo $form->textField($model,'rie_tratamiento'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'rie_presenciaElementos'); ?>
		<?php echo $form->textField($model,'rie_presenciaElementos'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'rie_fecha'); ?>
		<?php echo $form->textField($model,'rie_fecha'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'rie_pac_id'); ?>
		<?php echo $form->textField($model,'rie_pac_id',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->