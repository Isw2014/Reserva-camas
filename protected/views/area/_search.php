<?php
/* @var $this AreaController */
/* @var $model Area */
/* @var $form BSActiveForm */
?>

<?php $form=$this->beginWidget('bootstrap.widgets.BsActiveForm', array(
    'action'=>Yii::app()->createUrl($this->route),
    'method'=>'get',
)); ?>

    <?php echo $form->textFieldControlGroup($model,'are_correl',array('maxlength'=>10)); ?>
    <?php echo $form->textFieldControlGroup($model,'are_nombre',array('maxlength'=>45)); ?>
    <?php echo $form->textAreaControlGroup($model,'are_descripcion',array('rows'=>6)); ?>

    <div class="form-actions">
        <?php echo BsHtml::submitButton('Search',  array('color' => BsHtml::BUTTON_COLOR_PRIMARY,));?>
    </div>

<?php $this->endWidget(); ?>
