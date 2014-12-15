<?php
/* @var $this SalaController */
/* @var $model Sala */
/* @var $form BSActiveForm */
?>

<?php $form=$this->beginWidget('bootstrap.widgets.BsActiveForm', array(
    'id'=>'sala-form',
    // Please note: When you enable ajax validation, make sure the corresponding
    // controller action is handling ajax validation correctly.
    // There is a call to performAjaxValidation() commented in generated controller code.
    // See class documentation of CActiveForm for details on this.
    'enableAjaxValidation'=>false,
)); ?>

    <p class="help-block">Campos con <span class="required">*</span> son obligatorios.</p>

    <?php echo $form->errorSummary($model); ?>

    <?php echo $form->textFieldControlGroup($model,'sal_numero',array('maxlength'=>10)); ?>

    <?php echo $form->dropDownListControlGroup($model, 'sal_are_correl', array(
        CHtml::listData(Area::model()->findAll(),'are_correl','are_nombre'),
        ), array('empty' => '(Seleccione Area)',
        ));
    ?>

    <?php echo BsHtml::submitButton('Aceptar', array('color' => BsHtml::BUTTON_COLOR_PRIMARY)); ?>

<?php $this->endWidget(); ?>
