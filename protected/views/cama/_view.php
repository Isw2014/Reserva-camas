<?php
/* @var $this CamaController */
/* @var $data Cama */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('cam_correl')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->cam_correl), array('view', 'id'=>$data->cam_correl)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cam_numero')); ?>:</b>
	<?php echo CHtml::encode($data->cam_numero); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cam_estado')); ?>:</b>
	<?php echo CHtml::encode($data->cam_estado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cam_sal_correl')); ?>:</b>
	<?php echo CHtml::encode($data->cam_sal_correl); ?>
	<br />


</div>