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

<?php $this->beginWidget(
    'bootstrap.widgets.TbModal',
    array('id' => 'myModal')
    ); 
?>


<div class="modal-header">
    <a class="close" data-dismiss="modal">&times;</a>
    <h4>Modal header</h4>
</div>

<div class="modal-body">
<?php 
    
    $sourceModel = new Source;
    
    
    $this->renderPartial('..\source\view', array(
			'model'=>$sourceModel->findByPk($model->source_id)
    ));
    
?>

</div>

