<?php
/* @var $this PacienteController */
/* @var $data Paciente */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('pac_correl')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->pac_correl), array('view', 'id'=>$data->pac_correl)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pac_nombre')); ?>:</b>
	<?php echo CHtml::encode($data->pac_nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pac_aPaterno')); ?>:</b>
	<?php echo CHtml::encode($data->pac_aPaterno); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pac_aMaterno')); ?>:</b>
	<?php echo CHtml::encode($data->pac_aMaterno); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pac_estado')); ?>:</b>
	<?php echo CHtml::encode($data->pac_estado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pac_puntaje')); ?>:</b>
	<?php echo CHtml::encode($data->pac_puntaje); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pac_rut')); ?>:</b>
	<?php echo CHtml::encode($data->pac_rut); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('pac_esp_correl')); ?>:</b>
	<?php echo CHtml::encode($data->pac_esp_correl); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pac_cam_correl')); ?>:</b>
	<?php echo CHtml::encode($data->pac_cam_correl); ?>
	<br />

	*/ ?>

</div>