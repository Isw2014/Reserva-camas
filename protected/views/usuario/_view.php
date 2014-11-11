<?php
/* @var $this UsuarioController */
/* @var $data Usuario */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('usu_correl')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->usu_correl),array('view','id'=>$data->usu_correl)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usu_nombre')); ?>:</b>
	<?php echo CHtml::encode($data->usu_nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usu_aPaterno')); ?>:</b>
	<?php echo CHtml::encode($data->usu_aPaterno); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usu_aMaterno')); ?>:</b>
	<?php echo CHtml::encode($data->usu_aMaterno); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usu_usuario')); ?>:</b>
	<?php echo CHtml::encode($data->usu_usuario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usu_clave')); ?>:</b>
	<?php echo CHtml::encode($data->usu_clave); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usu_rut')); ?>:</b>
	<?php echo CHtml::encode($data->usu_rut); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('usu_esp_correl')); ?>:</b>
	<?php echo CHtml::encode($data->usu_esp_correl); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usu_mail')); ?>:</b>
	<?php echo CHtml::encode($data->usu_mail); ?>
	<br />

	*/ ?>

</div>