<?php
/* @var $this DefinitionController */
/* @var $model Definition */
/* @var $form CActiveForm */
?>

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
<style>
    .inputLight {color:#c0c0c0;}
</style>
<?php
$this->beginWidget('zii.widgets.jui.CJuiDialog', array( // the dialog
    'id'=>'dialogSource',
    'options'=>array(
        'title'=>Yii::t('source', 'Create Source'),
        'autoOpen'=>false,
        'modal'=>true,
        'width'=>550,
        'height'=>370,
    ),
));?>

<div class="divForForm"></div>

<?php $this->endWidget();?>

<div class="form">

 
<script type="text/javascript">
$(document).ready(function() {
    if ($('#Definition_entry_id').val()!='')
    {
        <?php echo CHtml::ajax(array(
            'url'=>array('ajax/getEntry'),
            'data'=> "js:'id='+$('#Definition_entry_id').val()",
            'type'=>'post',
            'dataType'=>'json',
            'success'=>'function(val){'
            . '$("#entry").val(val);'
            . '$("#entry").prop("readonly",true);'
            . '$("#entry").css("color", "black");}'))
        ?>
        
     }
    
       
        
});
</script>


<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'definition-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'entry_id'); ?>
		
        <?php echo CHtml::activeHiddenField($model,'entry_id'); ?>

        <?php
            $this->widget('zii.widgets.jui.CJuiAutoComplete', array(
                'model' => $model,                
                'name' => 'entry',
                'value' => 'Enter the term to search...',
                'source' => Yii::app()->createUrl('ajax/listEntries'),
                'options' => array(            
                    'minLength' => 1,
                    'select' => "js:function(event, ui) {
                        $('#Definition_entry_id').val(ui.item.id);                        
                    }",
                    'change' => "js:function(event, ui) {
                        if (!ui.item) {
                            $('#Definition_entry_id').val('');                            
                        }
                    }",
                ),
                'htmlOptions'=> array(
                    'style'=>'width:300px; color:#C0C0C0;',  
                    'onclick' => "if(document.getElementById('entry').value=='Enter the term to search...')
                        {
                                document.getElementById('entry').value='';
                                $('#entry').css('color', '');
                        }",
                    'onfocusout' => "if(document.getElementById('entry').value=='')
                        {
                                document.getElementById('entry').value='Enter the term to search...';
                                $('#entry').css('color', '#C0C0C0');
                        }",
                    
                        
                ),            
            )) 
        ?>
        
		<?php echo $form->error($model,'entry_id'); ?>
	</div>

        <div class="row">
		<?php echo $form->labelEx($model,'dictionary_id'); ?>		
		<?php echo CHtml::activeDropDownList(
            $model, 
            'dictionary_id', 
            $model->dictionaryOptions(),
            array('empty' => 'Select a Dictionary'));?>
        <?php echo $form->error($model,'dictionary_id'); ?>
	</div>
        
        
	<div class="row">
		<?php echo $form->labelEx($model,'source'); ?>       
		<?php echo $form->textField($model,'source',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'source'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'type_id'); ?>		
		<?php echo CHtml::activeDropDownList(
            $model, 
            'type_id', 
            $model->typeOptions(),
            array('empty' => 'Select a Type'));?>
        <?php echo $form->error($model,'type_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'definition'); ?>
		<?php echo $form->textArea($model,'definition',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'definition'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'position'); ?>
		<?php echo $form->textField($model,'position',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'position'); ?>
	</div>



	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->