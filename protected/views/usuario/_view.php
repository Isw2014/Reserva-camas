<?php
/* @var $this UsuarioController */
/* @var $data Usuario */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('usu_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->usu_id), array('view', 'id'=>$data->usu_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usu_nombre')); ?>:</b>
	<?php echo CHtml::encode($data->usu_nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usu_apellidoMat')); ?>:</b>
	<?php echo CHtml::encode($data->usu_apellidoMat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usu_apellidoPat')); ?>:</b>
	<?php echo CHtml::encode($data->usu_apellidoPat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usu_rut')); ?>:</b>
	<?php echo CHtml::encode($data->usu_rut); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usu_especialidad')); ?>:</b>
	<?php echo CHtml::encode($data->usu_especialidad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usu_password')); ?>:</b>
	<?php echo CHtml::encode($data->usu_password); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('usu_username')); ?>:</b>
	<?php echo CHtml::encode($data->usu_username); ?>
	<br />

	*/ ?>

</div>