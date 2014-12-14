<?php
/* @var $this PacienteHasCamaController */
/* @var $model PacienteHasCama */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('bootstrap.widgets.BsActiveForm', array(
    'id'=>'paciente-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">Campos con <span class="required">*</span> son obligatorios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->dropDownListControlGroup($model,'cam_cam_correl', array(
        CHtml::listData(cama::model()->findAllByAttributes(array('cam_estado' => "Libre")),'cam_correl','cam_numero'),
        ), array('empty' => '(Seleccione cama)',
        ));
    ?>
	</div>

	<div class="row">
		<td><b><?php echo "fecha Ingreso";?><br></td>
        <td><?php echo $form->dateField($model,'pac_cam_fechaInicio');?></td>
		<?php echo $form->error($model,'pac_cam_fechaInicio'); ?>
	</div>

	<div class="row">
		<td><b><?php echo "fecha Alta";?><br></td>
        <td><?php echo $form->dateField($model,'pac_cam_fechaFin');?></td>
		<?php echo $form->error($model,'pac_cam_fechaFin'); ?>
	</div>

	<div class="row buttons">
		<?php echo BsHtml::submitButton('Aceptar', array('color' => BsHtml::BUTTON_COLOR_PRIMARY)); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->