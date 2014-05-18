<?php
    Yii::app()->clientScript->registerScript('helpers', '                                                           
              yii = {                                                                                                     
                  urls: {   
                      params: '.CJSON::encode(Yii::app()->createUrl('ajax/listEntries')).', 
                      getDefinitions: '.CJSON::encode(Yii::app()->createUrl('ajax/getDefinitions')).',                                   
                      base: '.CJSON::encode(Yii::app()->baseUrl).'                                                        
                  }                                                                                                       
              };                                                                                                          
    '); 
?>
<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl.'/js/getEntryDefinitions.js', CClientScript::POS_END); ?>

<?php 
        $select = '0';
        echo CHtml::dropDownList('searchOption', $select, 
                    array('Start With', 
                          'Include', 
                          'Equal'));        
?>



<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'entry-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	//'enableAjaxValidation'=>false,
        // Yii::app()->createUrl('ajax/listEntries'),
)); ?>
    

<?php echo $form->hiddenField($model,'id',array()); ?>

<?php
    $this->widget('zii.widgets.jui.CJuiAutoComplete', array(
        'model' => $model,
        'attribute' => 'id',
        'name' => 'entry',
        'value' => 'Enter the term to search...',
        'source' => 'js:function(request, response){
            $.get("/~meni/dictionary/index.php/ajax/listEntries", {
                term: request.term,
                option: $("#searchOption").val()
            }, function(data){response(data)}, "json");}',
        'options' => array(            
            'minLength' => 2,
            'delay' => 500,
            'select' => "js:function(event, ui) {  
                if (typeof(ui.item.id) != 'undefined' && ui.item.id !== null) {
                    $('#Entry_id').val(ui.item.id);
                    getDefinitions(yii.urls.getDefinitions+'/'+ui.item.id);
                }
            }",
            'change' => "js:function(event, ui) {
                if (typeof(ui.item.id) != 'undefined' && ui.item.id !== null) {
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

<div id="wordEntry"></div>
 
   

</div><!-- form -->

