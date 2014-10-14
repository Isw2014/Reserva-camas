<?php
/* @var $this CamaController */
/* @var $data Cama */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('cam_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->cam_id), array('view', 'id'=>$data->cam_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cam_numero')); ?>:</b>
	<?php echo CHtml::encode($data->cam_numero); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cam_estado')); ?>:</b>
	<?php echo CHtml::encode($data->cam_estado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cam_sal_id')); ?>:</b>
	<?php echo CHtml::encode($data->cam_sal_id); ?>
	<br />


</div>