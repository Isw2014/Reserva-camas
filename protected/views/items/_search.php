<?php
/* @var $this ItemsController */
/* @var $model Items */
/* @var $form BSActiveForm */
?>

<?php $form=$this->beginWidget('bootstrap.widgets.BsActiveForm', array(
    'action'=>Yii::app()->createUrl($this->route),
    'method'=>'get',
)); ?>

    <?php echo $form->textFieldControlGroup($model,'ite_correl',array('maxlength'=>10)); ?>
    <?php echo $form->textFieldControlGroup($model,'ite_nombre',array('maxlength'=>45)); ?>
    <?php echo $form->textFieldControlGroup($model,'ite_estado'); ?>
    <?php echo $form->textFieldControlGroup($model,'ite_ant_correl',array('maxlength'=>10)); ?>

    <div class="form-actions">
        <?php echo BsHtml::submitButton('Search',  array('color' => BsHtml::BUTTON_COLOR_PRIMARY,));?>
    </div>

<?php $this->endWidget(); ?>
