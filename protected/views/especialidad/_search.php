<?php
/* @var $this EspecialidadController */
/* @var $model Especialidad */
/* @var $form BSActiveForm */
?>

<?php $form=$this->beginWidget('bootstrap.widgets.BsActiveForm', array(
    'action'=>Yii::app()->createUrl($this->route),
    'method'=>'get',
)); ?>

    <?php echo $form->textFieldControlGroup($model,'esp_correl',array('maxlength'=>10)); ?>
    <?php echo $form->textFieldControlGroup($model,'esp_nombre',array('maxlength'=>45)); ?>
    <?php echo $form->textAreaControlGroup($model,'esp_descripcion',array('rows'=>6)); ?>

    <div class="form-actions">
        <?php echo BsHtml::submitButton('Search',  array('color' => BsHtml::BUTTON_COLOR_PRIMARY,));?>
    </div>

<?php $this->endWidget(); ?>
