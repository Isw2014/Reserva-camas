<?php
/* @var $this AntecedentesController */
/* @var $model Antecedentes */
/* @var $form BSActiveForm */
?>

<?php $form=$this->beginWidget('bootstrap.widgets.BsActiveForm', array(
    'action'=>Yii::app()->createUrl($this->route),
    'method'=>'get',
)); ?>

    <?php echo $form->textFieldControlGroup($model,'ant_correl',array('maxlength'=>10)); ?>
    <?php echo $form->textFieldControlGroup($model,'ant_fecha',array('maxlength'=>45)); ?>
    <?php echo $form->textFieldControlGroup($model,'ant_pac_correl',array('maxlength'=>10)); ?>

    <div class="form-actions">
        <?php echo BsHtml::submitButton('Search',  array('color' => BsHtml::BUTTON_COLOR_PRIMARY,));?>
    </div>

<?php $this->endWidget(); ?>
