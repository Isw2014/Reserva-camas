<?php
/* @var $this EspecialidadController */
/* @var $data Especialidad */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('esp_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->esp_id), array('view', 'id'=>$data->esp_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('esp_nombre')); ?>:</b>
	<?php echo CHtml::encode($data->esp_nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('esp_descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->esp_descripcion); ?>
	<br />


</div>