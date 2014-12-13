<?php
/* @var $this PacienteController */
/* @var $model Paciente */
/* @var $form BSActiveForm */
?>

<?php $form=$this->beginWidget('bootstrap.widgets.BsActiveForm', array(
    'id'=>'paciente-form',
    // Please note: When you enable ajax validation, make sure the corresponding
    // controller action is handling ajax validation correctly.
    // There is a call to performAjaxValidation() commented in generated controller code.
    // See class documentation of CActiveForm for details on this.
    'enableAjaxValidation'=>false,
)); ?>

    <p class="help-block">Campos con <span class="required">*</span> son obligatorios.</p>

    <?php echo $form->errorSummary($model); ?>

    <?php echo $form->textFieldControlGroup($model,'pac_nombre',array('disabled' => true)); ?>
    <?php echo $form->textFieldControlGroup($model,'pac_aPaterno',array('disabled' => true)); ?>
    <?php echo $form->textFieldControlGroup($model,'pac_aMaterno',array('disabled' => true)); ?>
    <?php echo $form->dropDownListControlGroup($model, 'pac_estado', array(
        '1' => 'Estable', '2' => 'Grave','3' => 'Saludable','4' =>'Muerto'
        ), array('empty' => 'Seleccione Estado' ));  ?>
        
    <?php echo $form->textFieldControlGroup($model,'pac_puntaje'); ?>
    <?php echo $form->textFieldControlGroup($model,'pac_rut',array('disabled' => true)); ?>

    <?php echo $form->dropDownListControlGroup($model,'pac_esp_correl', array(
        CHtml::listData(especialidad::model()->findAll(),'esp_correl','esp_nombre'),
        ), array('empty' => '(Seleccione Especialidad)',
        ));
    ?>
    <?php echo BsHtml::pageHeader('','Datos hospitalizacion ') ?>

    <?php echo $form->dropDownListControlGroup($model, 'pac_sal_correl', array(
        CHtml::listData(sala::model()->findAll(),'sal_correl','sal_numero'),
        ), array('empty' => '(Seleccione Sala)',
        ));
    ?>

    <?php echo $form->dropDownListControlGroup(Cama::model(),'cam_correl', array(
        CHtml::listData(cama::model()->findAllByAttributes(array('cam_estado' => "Libre")),'cam_correl','cam_numero'),
        ), array('empty' => '(Seleccione cama)',
        ));
    ?>
    <div><?php echo "Fecha hospitalizacion" ?></div>
    <div><?php echo $form->dateField(PacienteHasCama::model(),'pac_cam_fechaInicio');?></div>
    <div><?php echo "Fecha Alta" ?></div>
    <div><?php echo $form->dateField(PacienteHasCama::model(),'pac_cam_fechaFin');?></div>

    <?php echo BsHtml::submitButton('Aceptar', array('color' => BsHtml::BUTTON_COLOR_PRIMARY)); ?>

<?php $this->endWidget(); ?>
