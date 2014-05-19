<?php
    Yii::app()->clientScript->registerScript('helpers', '                                                           
              yii = {                                                                                                     
                  urls: {   
                      params: '.CJSON::encode(Yii::app()->createUrl('ajax/listEntries')).', 
                      getDefinitions: '.CJSON::encode(Yii::app()->createUrl('ajax/getDefinitions')).',                                   
                      base: '.CJSON::encode(Yii::app()->baseUrl).',
                      updateDefinitions: '.CJSON::encode(Yii::app()->createUrl('definition')).'
                  }                                                                                                       
              };                                                                                                          
    '); 
?>

<?php
/* @var $this SiteController */

Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl.'/css/dictionary.css');

$this->pageTitle=Yii::app()->name;
?>

<div id="home-logo"></div>
<?php $this->renderPartial('_form', array('model'=>$model)); ?>

    <?php if (!Yii::app()->user->isGuest && Yii::app()->user->type == 1) { ?> <div id="adminuser"></div> <?php } 