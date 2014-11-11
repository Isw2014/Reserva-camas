<?php
/* @var $this PacienteController */
/* @var $model Paciente */
/* @var $form BSActiveForm */
?>

<?php $form=$this->beginWidget('bootstrap.widgets.BsActiveForm', array(
    'action'=>Yii::app()->createUrl($this->route),
    'method'=>'get',
)); ?>

    <?php echo $form->textFieldControlGroup($model,'pac_correl',array('maxlength'=>10)); ?>
    <?php echo $form->textFieldControlGroup($model,'pac_nombre',array('maxlength'=>45)); ?>
    <?php echo $form->textFieldControlGroup($model,'pac_aPaterno',array('maxlength'=>45)); ?>
    <?php echo $form->textFieldControlGroup($model,'pac_aMaterno',array('maxlength'=>45)); ?>
    <?php echo $form->textFieldControlGroup($model,'pac_estado',array('maxlength'=>45)); ?>
    <?php echo $form->textFieldControlGroup($model,'pac_puntaje'); ?>
    <?php echo $form->textFieldControlGroup($model,'pac_rut',array('maxlength'=>12)); ?>
    <?php echo $form->textFieldControlGroup($model,'pac_esp_correl',array('maxlength'=>10)); ?>
    <?php echo $form->textFieldControlGroup($model,'pac_cam_correl',array('maxlength'=>10)); ?>

    <div class="form-actions">
        <?php echo BsHtml::submitButton('Search',  array('color' => BsHtml::BUTTON_COLOR_PRIMARY,));?>
    </div>

<?php $this->endWidget(); ?>
