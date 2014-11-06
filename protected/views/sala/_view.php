<?php
/* @var $this SalaController */
/* @var $data Sala */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('sal_correl')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->sal_correl), array('view', 'id'=>$data->sal_correl)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sal_numero')); ?>:</b>
	<?php echo CHtml::encode($data->sal_numero); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sal_totalCamas')); ?>:</b>
	<?php echo CHtml::encode($data->sal_totalCamas); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sal_camasDisponibles')); ?>:</b>
	<?php echo CHtml::encode($data->sal_camasDisponibles); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sal_are_correl')); ?>:</b>
	<?php echo CHtml::encode($data->sal_are_correl); ?>
	<br />


</div>