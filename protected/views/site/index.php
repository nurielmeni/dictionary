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
<p>Welcome to the Scientology Pilot Dictionary.</p>
<p>Tel-Aviv Org.</p>
<?php $this->endWidget(); ?>
<?php $this->renderPartial('_form', array('model'=>$model)); ?>

