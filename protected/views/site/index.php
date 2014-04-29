<?php
/* @var $this SiteController */

Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl.'/css/dictionary.css');

$this->pageTitle=Yii::app()->name;
?>

<div id="home-logo"></div>
<?php $this->renderPartial('_form', array('model'=>$model)); ?>

