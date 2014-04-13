<?php
/* @var $this DefinitionController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Definitions',
);

$this->menu=array(
	array('label'=>'Create Definition', 'url'=>array('create')),
	array('label'=>'Manage Definition', 'url'=>array('admin')),
);
?>

<h1>Definitions</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
