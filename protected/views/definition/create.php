<?php
/* @var $this DefinitionController */
/* @var $model Definition */

$this->breadcrumbs=array(
	'Definitions'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Definition', 'url'=>array('index')),
	array('label'=>'Manage Definition', 'url'=>array('admin')),
);
?>

<h1>Create Definition</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>