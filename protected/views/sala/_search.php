<?php
/* @var $this SalaController */
/* @var $model Sala */
/* @var $form BSActiveForm */
?>

<?php $form=$this->beginWidget('bootstrap.widgets.BsActiveForm', array(
    'action'=>Yii::app()->createUrl($this->route),
    'method'=>'get',
)); ?>

    <?php echo $form->textFieldControlGroup($model,'sal_correl',array('maxlength'=>10)); ?>
    <?php echo $form->textFieldControlGroup($model,'sal_numero',array('maxlength'=>10)); ?>
    <?php echo $form->textFieldControlGroup($model,'sal_totalCamas'); ?>
    <?php echo $form->textFieldControlGroup($model,'sal_camasDisponibles'); ?>
    <?php echo $form->textFieldControlGroup($model,'sal_are_correl',array('maxlength'=>10)); ?>

    <div class="form-actions">
        <?php echo BsHtml::submitButton('Search',  array('color' => BsHtml::BUTTON_COLOR_PRIMARY,));?>
    </div>

<?php $this->endWidget(); ?>
