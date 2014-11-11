<?php
/* @var $this PacienteController */
/* @var $model Paciente */
/* @var $form BSActiveForm */
?>

<?php $form=$this->beginWidget('bootstrap.widgets.BsActiveForm', array(
    'id'=>'paciente-form',
    // Please note: When you enable ajax validation, make sure the corresponding
    // controller action is handling ajax validation correctly.
    // There is a call to performAjaxValidation() commented in generated controller code.
    // See class documentation of CActiveForm for details on this.
    'enableAjaxValidation'=>false,
)); ?>

    <p class="help-block">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($model); ?>

    <?php echo $form->textFieldControlGroup($model,'pac_nombre',array('maxlength'=>45)); ?>
    <?php echo $form->textFieldControlGroup($model,'pac_aPaterno',array('maxlength'=>45)); ?>
    <?php echo $form->textFieldControlGroup($model,'pac_aMaterno',array('maxlength'=>45)); ?>
    <?php echo $form->textFieldControlGroup($model,'pac_estado',array('maxlength'=>45)); ?>
    <?php echo $form->textFieldControlGroup($model,'pac_puntaje'); ?>
    <?php echo $form->textFieldControlGroup($model,'pac_rut',array('maxlength'=>12)); ?>
    <?php echo $form->textFieldControlGroup($model,'pac_esp_correl',array('maxlength'=>10)); ?>
    <?php echo $form->textFieldControlGroup($model,'pac_cam_correl',array('maxlength'=>10)); ?>

    <?php echo BsHtml::submitButton('Submit', array('color' => BsHtml::BUTTON_COLOR_PRIMARY)); ?>

<?php $this->endWidget(); ?>
