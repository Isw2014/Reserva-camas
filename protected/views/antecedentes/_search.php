<?php
/* @var $this AntecedentesController */
/* @var $model Antecedentes */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'ant_id'); ?>
		<?php echo $form->textField($model,'ant_id',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ant_control'); ?>
		<?php echo $form->textField($model,'ant_control'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ant_balance'); ?>
		<?php echo $form->textField($model,'ant_balance'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ant_cuidadoOxigenoterapia'); ?>
		<?php echo $form->textField($model,'ant_cuidadoOxigenoterapia'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ant_cuidadoAereo'); ?>
		<?php echo $form->textField($model,'ant_cuidadoAereo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ant_intervenciones'); ?>
		<?php echo $form->textField($model,'ant_intervenciones'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ant_cuidadoPiel'); ?>
		<?php echo $form->textField($model,'ant_cuidadoPiel'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ant_tratamiento'); ?>
		<?php echo $form->textField($model,'ant_tratamiento'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ant_presenciaElementos'); ?>
		<?php echo $form->textField($model,'ant_presenciaElementos'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ant_fecha'); ?>
		<?php echo $form->textField($model,'ant_fecha'); ?>
	</div>

	<!--<div class="row">
		<?php echo $form->label($model,'ant_pac_id'); ?>
		<?php echo $form->textField($model,'ant_pac_id',array('size'=>10,'maxlength'=>10)); ?>
	</div>-->

	<div class="row">
		<?php echo $form->label($model,'ant_cambioRopa'); ?>
		<?php echo $form->textField($model,'ant_cambioRopa'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ant_movilizacion'); ?>
		<?php echo $form->textField($model,'ant_movilizacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ant_cuidadosAlimentacion'); ?>
		<?php echo $form->textField($model,'ant_cuidadosAlimentacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ant_cuidadosEliminacion'); ?>
		<?php echo $form->textField($model,'ant_cuidadosEliminacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ant_apoyo'); ?>
		<?php echo $form->textField($model,'ant_apoyo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ant_vigilancia'); ?>
		<?php echo $form->textField($model,'ant_vigilancia'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->