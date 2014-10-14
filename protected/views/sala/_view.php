<?php
/* @var $this SalaController */
/* @var $data Sala */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('sal_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->sal_id), array('view', 'id'=>$data->sal_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sal_camasTotales')); ?>:</b>
	<?php echo CHtml::encode($data->sal_camasTotales); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sal_camasLibres')); ?>:</b>
	<?php echo CHtml::encode($data->sal_camasLibres); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sal_numeroSala')); ?>:</b>
	<?php echo CHtml::encode($data->sal_numeroSala); ?>
	<br />


</div>