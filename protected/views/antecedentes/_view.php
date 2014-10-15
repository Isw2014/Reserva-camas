<?php
/* @var $this AntecedentesController */
/* @var $data Antecedentes */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ant_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ant_id), array('view', 'id'=>$data->ant_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ant_control')); ?>:</b>
	<?php echo CHtml::encode($data->ant_control); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ant_balance')); ?>:</b>
	<?php echo CHtml::encode($data->ant_balance); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ant_cuidadoOxigenoterapia')); ?>:</b>
	<?php echo CHtml::encode($data->ant_cuidadoOxigenoterapia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ant_cuidadoAereo')); ?>:</b>
	<?php echo CHtml::encode($data->ant_cuidadoAereo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ant_intervenciones')); ?>:</b>
	<?php echo CHtml::encode($data->ant_intervenciones); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ant_cuidadoPiel')); ?>:</b>
	<?php echo CHtml::encode($data->ant_cuidadoPiel); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('ant_tratamiento')); ?>:</b>
	<?php echo CHtml::encode($data->ant_tratamiento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ant_presenciaElementos')); ?>:</b>
	<?php echo CHtml::encode($data->ant_presenciaElementos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ant_fecha')); ?>:</b>
	<?php echo CHtml::encode($data->ant_fecha); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ant_pac_id')); ?>:</b>
	<?php echo CHtml::encode($data->ant_pac_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ant_cambioRopa')); ?>:</b>
	<?php echo CHtml::encode($data->ant_cambioRopa); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ant_movilizacion')); ?>:</b>
	<?php echo CHtml::encode($data->ant_movilizacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ant_cuidadosAlimentacion')); ?>:</b>
	<?php echo CHtml::encode($data->ant_cuidadosAlimentacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ant_cuidadosEliminacion')); ?>:</b>
	<?php echo CHtml::encode($data->ant_cuidadosEliminacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ant_apoyo')); ?>:</b>
	<?php echo CHtml::encode($data->ant_apoyo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ant_vigilancia')); ?>:</b>
	<?php echo CHtml::encode($data->ant_vigilancia); ?>
	<br />

	*/ ?>

</div>