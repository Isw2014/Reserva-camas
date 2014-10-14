<?php
/* @var $this PacienteController */
/* @var $data Paciente */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('pac_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->pac_id), array('view', 'id'=>$data->pac_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pac_categoria')); ?>:</b>
	<?php echo CHtml::encode($data->pac_categoria); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pac_estado')); ?>:</b>
	<?php echo CHtml::encode($data->pac_estado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pac_cam_id')); ?>:</b>
	<?php echo CHtml::encode($data->pac_cam_id); ?>
	<br />


</div>