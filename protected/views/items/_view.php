<?php
/* @var $this ItemsController */
/* @var $data Items */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ite_correl')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ite_correl),array('view','id'=>$data->ite_correl)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ite_nombre')); ?>:</b>
	<?php echo CHtml::encode($data->ite_nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ite_estado')); ?>:</b>
	<?php echo CHtml::encode($data->ite_estado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ite_ant_correl')); ?>:</b>
	<?php echo CHtml::encode($data->ite_ant_correl); ?>
	<br />


</div>