<div class="modal-footer">
    <?php $this->widget(
        'bootstrap.widgets.TbButton',
        array(
            'type' => 'primary',
            'label' => 'Save changes',
            'url' => '#',
            'htmlOptions' => array('data-dismiss' => 'modal'),
        )
    ); ?>
    <?php $this->widget(
        'bootstrap.widgets.TbButton',
        array(
            'label' => 'Close',
            'url' => '#',
            'htmlOptions' => array('data-dismiss' => 'modal'),
        )
    ); ?>
</div>

<?php $this->endWidget(); ?>
<?php $this->widget(
    'bootstrap.widgets.TbButton',
    array(
        'label' => 'Click me',
        'type' => 'primary',
        'htmlOptions' => array(
            'data-toggle' => 'modal',
            'data-target' => '#myModal',
        ),
    )
);

?>


<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
                'dictionary_id',
		'entry_id',
		'source',
		'type_id',
		'definition',
		'position',
		'date_entered',
		'date_updated',
		'by_user_id',
	),
)); ?>
