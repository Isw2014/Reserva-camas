<?php
/* @var $this PacienteHasCamaController */
/* @var $data PacienteHasCama */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('pac_pac_correl')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->pac_pac_correl), array('view', 'id'=>$data->pac_pac_correl)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cam_cam_correl')); ?>:</b>
	<?php echo CHtml::encode($data->cam_cam_correl); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pac_cam_fechaInicio')); ?>:</b>
	<?php echo CHtml::encode($data->pac_cam_fechaInicio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pac_cam_fechaFin')); ?>:</b>
	<?php echo CHtml::encode($data->pac_cam_fechaFin); ?>
	<br />


</div>