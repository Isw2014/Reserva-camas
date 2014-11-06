<?php
/* @var $this EspecialidadController */
/* @var $data Especialidad */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('esp_correl')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->esp_correl), array('view', 'id'=>$data->esp_correl)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('esp_nombre')); ?>:</b>
	<?php echo CHtml::encode($data->esp_nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('esp_descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->esp_descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('esp_usu_correl')); ?>:</b>
	<?php echo CHtml::encode($data->esp_usu_correl); ?>
	<br />


</div>