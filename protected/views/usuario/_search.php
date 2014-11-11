<?php
/* @var $this UsuarioController */
/* @var $model Usuario */
/* @var $form BSActiveForm */
?>

<?php $form=$this->beginWidget('bootstrap.widgets.BsActiveForm', array(
    'action'=>Yii::app()->createUrl($this->route),
    'method'=>'get',
)); ?>

    <?php echo $form->textFieldControlGroup($model,'usu_correl',array('maxlength'=>10)); ?>
    <?php echo $form->textFieldControlGroup($model,'usu_nombre',array('maxlength'=>45)); ?>
    <?php echo $form->textFieldControlGroup($model,'usu_aPaterno',array('maxlength'=>45)); ?>
    <?php echo $form->textFieldControlGroup($model,'usu_aMaterno',array('maxlength'=>45)); ?>
    <?php echo $form->textFieldControlGroup($model,'usu_usuario',array('maxlength'=>45)); ?>
    <?php echo $form->textFieldControlGroup($model,'usu_clave',array('maxlength'=>20)); ?>
    <?php echo $form->textFieldControlGroup($model,'usu_rut',array('maxlength'=>12)); ?>
    <?php echo $form->textFieldControlGroup($model,'usu_esp_correl',array('maxlength'=>10)); ?>
    <?php echo $form->textFieldControlGroup($model,'usu_mail',array('maxlength'=>100)); ?>

    <div class="form-actions">
        <?php echo BsHtml::submitButton('Search',  array('color' => BsHtml::BUTTON_COLOR_PRIMARY,));?>
    </div>

<?php $this->endWidget(); ?>
