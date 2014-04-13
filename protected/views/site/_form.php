<?php
    Yii::app()->clientScript->registerScript('helpers', '                                                           
              yii = {                                                                                                     
                  urls: {                                                                                                 
                      getDefinitions: '.CJSON::encode(Yii::app()->createUrl('ajax/getDefinitions')).',                                   
                      base: '.CJSON::encode(Yii::app()->baseUrl).'                                                        
                  }                                                                                                       
              };                                                                                                          
    '); 
?>
<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl.'/js/getEntryDefinitions.js', CClientScript::POS_END); ?>


<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'entry-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	//'enableAjaxValidation'=>false,
)); ?>
<?php echo $form->hiddenField($model,'id',array()); ?>

<?php
    $this->widget('zii.widgets.jui.CJuiAutoComplete', array(
        'model' => $model,
        'attribute' => 'id',
        'name' => 'entry',
        'value' => 'Enter the term to search...',
        'source' => Yii::app()->createUrl('ajax/listEntries'),
        'options' => array(            
            'minLength' => 1,
            'select' => "js:function(event, ui) {
                $('#Entry_id').val(ui.item.id);
                getDefinitions(yii.urls.getDefinitions+'/'+ui.item.id);
            }",
            'change' => "js:function(event, ui) {
                if (!ui.item) {
                    $('#Entry_id').val('');
                    getDefinitions(yii.urls.getDefinitions+'/'+ui.item.id);
                }
            }",
        ),
        'htmlOptions'=> array(
            'style'=>'width:300px;',  
        ),
    )) 
?>


    
<?php $this->endWidget(); ?>


</div><!-- form -->

