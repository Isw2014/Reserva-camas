<?php
/* @var $this AntecedentesController */
/* @var $model Antecedentes */
/* @var $form BSActiveForm */
$modelo= new items();
?>
<?php $form=$this->beginWidget('bootstrap.widgets.BsActiveForm', array(
    'id'=>'antecedentes-form',
    // Please note: When you enable ajax validation, make sure the corresponding
    // controller action is handling ajax validation correctly.
    // There is a call to performAjaxValidation() commented in generated controller code.
    // See class documentation of CActiveForm for details on this.
    'enableAjaxValidation'=>false,
)); ?>

    <p class="help-block">Campos con <span class="required">*</span> son obligatorios.</p>

    <?php echo $form->errorSummary($model); ?>

    <?php echo $form->dateFieldControlGroup($model,'ant_fecha'); ?>

     <?php 
    if(items::model()->findByAttributes(array('ite_estado'=>"Activo"))) {
        $i=0;
        $array=  array();
        $array =items::model()->findAllByAttributes(array('ite_estado'=>"Activo"));
        $modle= new itemsHasAntecedentes;

        foreach ($array as $value) {
            echo $array[$i]->ite_nombre;
            echo $form->textFieldControlGroup($modle,'ant_ite_puntaje');

            $i++;
        }
    }
     ?>
    <!--<?php echo $form->textFieldControlGroup($model,'ant_puntaje'); ?>-->
    <!--<?php echo $form->textFieldControlGroup($model,'ant_pac_correl',array('maxlength'=>10)); ?>-->

    <?php echo BsHtml::submitButton('Aceptar', array('color' => BsHtml::BUTTON_COLOR_PRIMARY)); ?>

<?php $this->endWidget(); ?>
