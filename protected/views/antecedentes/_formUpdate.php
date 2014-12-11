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
<!-- Es importante poner <form> para que el boton submit redireccione por el metodo que aparece cuando apretas el boton-->

<table class="table table-striped table-condensed table-bordered">
        <tbody>
            <td><?php echo "fecha";?></td>
            <td><?php echo $form->dateField($model,'ant_fecha');?></td>
<?php 
foreach ($array as $key) :?>
        <tr>
            <td><?php echo items::model()->findByPk($key->ite_ite_correl)->ite_nombre; ?></td>
            <!--Despliega un formulario para cada id de la tabla ITEM-->
            <td><input type="number" class="form-control" name="Grupo[<?php echo $key->ite_ite_correl?>]" value=<?php echo $key->ant_ite_puntaje?> </td>
        </tr>
<?php endforeach; ?>
      </tbody>
    </table>

    <!--Boton de Submit-->
   <?php echo BsHtml::submitButton('Aceptar', array('color' => BsHtml::BUTTON_COLOR_PRIMARY)); ?>

<?php $this->endWidget(); ?>
