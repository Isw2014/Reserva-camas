<?php
/* @var $this CamaController */
/* @var $model Cama */
/* @var $form BSActiveForm */
?>

<?php $form=$this->beginWidget('bootstrap.widgets.BsActiveForm', array(
    'id'=>'cama-form',
    // Please note: When you enable ajax validation, make sure the corresponding
    // controller action is handling ajax validation correctly.
    // There is a call to performAjaxValidation() commented in generated controller code.
    // See class documentation of CActiveForm for details on this.
    'enableAjaxValidation'=>false,
)); ?>
<p class="help-block">Campos con <span class="required">*</span> son obligatorios.</p>

    <?php echo $form->errorSummary($model); ?>

    <?php echo $form->textFieldControlGroup($model,'cam_numero',array('maxlength'=>10)); ?>

    <?php echo $form->dropDownListControlGroup($model, 'cam_estado', array(
        'Libre' => 'Libre', 'Ocupada' => 'Ocupada',
        ), array('empty' => 'Seleccione Estado'
        ));     ?>

    <?php echo $form->dropDownListControlGroup($model, 'cam_sal_correl', array(
        CHtml::listData(sala::model()->findAll(),'sal_correl','sal_numero'),
        ), array('empty' => '(Seleccione Sala)',
        ));
    ?>



    <?php echo BsHtml::submitButton('Aceptar', array('color' => BsHtml::BUTTON_COLOR_PRIMARY)); ?>

<?php $this->endWidget(); ?>
