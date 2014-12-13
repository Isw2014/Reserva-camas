<?php
/* @var $this UsuarioController */
/* @var $model Usuario */
/* @var $form BSActiveForm */
?>

<?php $form=$this->beginWidget('bootstrap.widgets.BsActiveForm', array(
    'id'=>'usuario-form',
    // Please note: When you enable ajax validation, make sure the corresponding
    // controller action is handling ajax validation correctly.
    // There is a call to performAjaxValidation() commented in generated controller code.
    // See class documentation of CActiveForm for details on this.
    'enableAjaxValidation'=>false,
)); ?>

    <p class="help-block">Campos con <span class="required">*</span> son obligatorios.</p>

    <?php echo $form->errorSummary($model); ?>

    <?php echo $form->textFieldControlGroup($model,'usu_nombre',array('maxlength'=>45)); ?>
    <?php echo $form->textFieldControlGroup($model,'usu_aPaterno',array('maxlength'=>45)); ?>
    <?php echo $form->textFieldControlGroup($model,'usu_aMaterno',array('maxlength'=>45)); ?>  
    <?php echo $form->textFieldControlGroup($model,'usu_rut',array('maxlength'=>12)); ?>
    <?php echo $form->textFieldControlGroup($model,'usu_esp_correl',array('maxlength'=>10)); ?>
    <?php echo $form->textFieldControlGroup($model,'usu_mail',array('maxlength'=>100)); ?>

    <?php echo BsHtml::submitButton('Aceptar', array('color' => BsHtml::BUTTON_COLOR_PRIMARY)); ?>

<?php $this->endWidget(); ?>
