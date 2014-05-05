<?php
/* @var $this DefinitionController */
/* @var $model Definition */

$this->breadcrumbs=array(
	'Definitions'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Definition', 'url'=>array('index')),
	array('label'=>'Create Definition', 'url'=>array('create')),
	array('label'=>'View Definition', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Definition', 'url'=>array('admin')),
);
?>

<h1>Update Definition <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>