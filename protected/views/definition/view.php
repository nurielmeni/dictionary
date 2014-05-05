<?php
/* @var $this DefinitionController */
/* @var $model Definition */

$this->breadcrumbs=array(
	'Definitions'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Definition', 'url'=>array('index')),
	array('label'=>'Create Definition', 'url'=>array('create')),
	array('label'=>'Update Definition', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Definition', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Definition', 'url'=>array('admin')),
);
?>

<h1>View Definition #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
                array(
                    'name'=>'dictionary.name',
                    'type'=>'raw',
                    'value'=>CHtml::link(($model->dictionary->name), 
                            Yii::app()->createUrl('dictionary/'.$model->getAttribute('dictionary_id'))),
                ),
                array(
                    'name'=>'entry.name',
                    'type'=>'raw',
                    'value'=>CHtml::link(($model->entry->name), 
                            Yii::app()->createUrl('entry/'.$model->getAttribute('entry_id'))),
                ),
                'source',
                array(
                    'name'=>'type.name',
                    'type'=>'raw',
                    'value'=>CHtml::link(($model->type->name), 
                            Yii::app()->createUrl('type/'.$model->getAttribute('type_id'))),
                ),
                'definition',
                'position',		
                array(
                    'name'=>'user.username',
                    'type'=>'raw',
                    'value'=>CHtml::link(($model->user->username), 
                            Yii::app()->createUrl('user/'.$model->getAttribute('user_id'))),
                ),
		
	),
)); ?>
