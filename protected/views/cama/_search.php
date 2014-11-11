<?php
/* @var $this CamaController */
/* @var $model Cama */
/* @var $form BSActiveForm */
?>

<?php $form=$this->beginWidget('bootstrap.widgets.BsActiveForm', array(
    'action'=>Yii::app()->createUrl($this->route),
    'method'=>'get',
)); ?>

    <?php echo $form->textFieldControlGroup($model,'cam_correl',array('maxlength'=>10)); ?>
    <?php echo $form->textFieldControlGroup($model,'cam_numero',array('maxlength'=>10)); ?>
    <?php echo $form->textFieldControlGroup($model,'cam_estado',array('maxlength'=>45)); ?>
    <?php echo $form->textFieldControlGroup($model,'cam_sal_correl',array('maxlength'=>10)); ?>

    <div class="form-actions">
        <?php echo BsHtml::submitButton('Search',  array('color' => BsHtml::BUTTON_COLOR_PRIMARY,));?>
    </div>

<?php $this->endWidget(); ?>
