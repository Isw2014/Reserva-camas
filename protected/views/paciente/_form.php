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

    <p class="help-block">Campos con <span class="required">*</span> son obligatorios.</p>

    <?php echo $form->errorSummary($model); ?>

    <?php echo $form->textFieldControlGroup($model,'pac_nombre',array('disabled' => true)); ?>
    <?php echo $form->textFieldControlGroup($model,'pac_aPaterno',array('disabled' => true)); ?>
    <?php echo $form->textFieldControlGroup($model,'pac_aMaterno',array('disabled' => true)); ?>
    <?php echo $form->textFieldControlGroup($model,'pac_rut',array('disabled' => true)); ?>
    <?php echo $form->dropDownListControlGroup($model,'pac_esp_correl', array(
        CHtml::listData(Especialidad::model()->findAll(),'esp_correl','esp_nombre'),
        ), array('empty' => '(Seleccione Especialidad)',
        ));
    ?>
    <?php echo BsHtml::submitButton('Aceptar', array('color' => BsHtml::BUTTON_COLOR_PRIMARY)); ?>

<?php $this->endWidget(); ?>
