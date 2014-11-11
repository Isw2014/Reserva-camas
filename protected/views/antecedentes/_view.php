<?php
/* @var $this AntecedentesController */
/* @var $data Antecedentes */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ant_correl')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ant_correl),array('view','id'=>$data->ant_correl)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ant_fecha')); ?>:</b>
	<?php echo CHtml::encode($data->ant_fecha); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ant_pac_correl')); ?>:</b>
	<?php echo CHtml::encode($data->ant_pac_correl); ?>
	<br />


</div>