<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<?php $this->beginWidget(
    'bootstrap.widgets.TbHeroUnit',
    array(
        'heading' => CHtml::encode(Yii::app()->name),
    )
); ?>
<?php $this->endWidget(); ?>
<?php $this->renderPartial('_form', array('model'=>$model)); ?>

