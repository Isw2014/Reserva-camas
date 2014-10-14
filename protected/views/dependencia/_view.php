<?php
/* @var $this DependenciaController */
/* @var $data Dependencia */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('dep_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->dep_id), array('view', 'id'=>$data->dep_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dep_cambioRopa')); ?>:</b>
	<?php echo CHtml::encode($data->dep_cambioRopa); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dep_movilizacion')); ?>:</b>
	<?php echo CHtml::encode($data->dep_movilizacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dep_cuidadosAlimentacion')); ?>:</b>
	<?php echo CHtml::encode($data->dep_cuidadosAlimentacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dep_cuidadosEliminacion')); ?>:</b>
	<?php echo CHtml::encode($data->dep_cuidadosEliminacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dep_apoyo')); ?>:</b>
	<?php echo CHtml::encode($data->dep_apoyo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dep_vigilancia')); ?>:</b>
	<?php echo CHtml::encode($data->dep_vigilancia); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('dep_fecha')); ?>:</b>
	<?php echo CHtml::encode($data->dep_fecha); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dep_pac_id')); ?>:</b>
	<?php echo CHtml::encode($data->dep_pac_id); ?>
	<br />

	*/ ?>

</div>