<?php
/* @var $this DependenciaController */
/* @var $model Dependencia */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'dep_id'); ?>
		<?php echo $form->textField($model,'dep_id',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dep_cambioRopa'); ?>
		<?php echo $form->textField($model,'dep_cambioRopa'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dep_movilizacion'); ?>
		<?php echo $form->textField($model,'dep_movilizacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dep_cuidadosAlimentacion'); ?>
		<?php echo $form->textField($model,'dep_cuidadosAlimentacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dep_cuidadosEliminacion'); ?>
		<?php echo $form->textField($model,'dep_cuidadosEliminacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dep_apoyo'); ?>
		<?php echo $form->textField($model,'dep_apoyo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dep_vigilancia'); ?>
		<?php echo $form->textField($model,'dep_vigilancia'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dep_fecha'); ?>
		<?php echo $form->textField($model,'dep_fecha'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dep_pac_id'); ?>
		<?php echo $form->textField($model,'dep_pac_id',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->