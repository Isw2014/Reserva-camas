<?php
/* @var $this RiesgoController */
/* @var $data Riesgo */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('rie_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->rie_id), array('view', 'id'=>$data->rie_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rie_control')); ?>:</b>
	<?php echo CHtml::encode($data->rie_control); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rie_balance')); ?>:</b>
	<?php echo CHtml::encode($data->rie_balance); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rie_cuidadoOxigenoterapia')); ?>:</b>
	<?php echo CHtml::encode($data->rie_cuidadoOxigenoterapia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rie_cuidadoAereo')); ?>:</b>
	<?php echo CHtml::encode($data->rie_cuidadoAereo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rie_intervenciones')); ?>:</b>
	<?php echo CHtml::encode($data->rie_intervenciones); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rie_cuidadoPiel')); ?>:</b>
	<?php echo CHtml::encode($data->rie_cuidadoPiel); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('rie_tratamiento')); ?>:</b>
	<?php echo CHtml::encode($data->rie_tratamiento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rie_presenciaElementos')); ?>:</b>
	<?php echo CHtml::encode($data->rie_presenciaElementos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rie_fecha')); ?>:</b>
	<?php echo CHtml::encode($data->rie_fecha); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rie_pac_id')); ?>:</b>
	<?php echo CHtml::encode($data->rie_pac_id); ?>
	<br />

	*/ ?>

</div>