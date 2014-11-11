<?php
/* @var $this AreaController */
/* @var $data Area */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('are_correl')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->are_correl),array('view','id'=>$data->are_correl)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('are_nombre')); ?>:</b>
	<?php echo CHtml::encode($data->are_nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('are_descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->are_descripcion); ?>
	<br />


</div>