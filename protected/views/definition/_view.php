<?php
/* @var $this DefinitionController */
/* @var $data Definition */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dictionary_id')); ?>:</b>
	<?php echo CHtml::link($data->dictionary->name, array('dictionary/view', 'id' => $data->dictionary_id)); ?>
        <br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('entry_id')); ?>:</b>
	<?php echo CHtml::link($data->entry->name, array('entry/view', 'id' => $data->entry_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('source')); ?>:</b>
	<?php echo CHtml::encode($data->source); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('type_id')); ?>:</b>
	<?php echo CHtml::link($data->type->name, array('type/view', 'id' => $data->type_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('definition')); ?>:</b>
	<?php echo CHtml::encode($data->definition); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('position')); ?>:</b>
	<?php echo CHtml::encode($data->position); ?>
	<br />

	<?php /*
        <b><?php echo CHtml::encode($data->getAttributeLabel('date_entered')); ?>:</b>
	<?php echo CHtml::encode($data->date_entered); ?>
	<br />

	
	<b><?php echo CHtml::encode($data->getAttributeLabel('date_updated')); ?>:</b>
	<?php echo CHtml::encode($data->date_updated); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('by_user_id')); ?>:</b>
	<?php echo CHtml::encode($data->by_user_id); ?>
	<br />

	*/ ?>

</div>