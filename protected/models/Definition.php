<?php

/**
 * This is the model class for table "definition".
 *
 * The followings are the available columns in table 'definition':
 * @property string $id
 * @property string $dictionary_id
 * @property string $entry_id
 * @property string $source
 * @property string $type_id
 * @property string $definition
 * @property string $position
 * @property string $date_entered
 * @property string $date_updated
 * @property string $by_user_id
 *
 * The followings are the available model relations:
 * @property Dictionary $dictionary
 * @property Entry $entry 
 * @property Type $type
 */
class Definition extends DictionaryCActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'definition';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
        return array(
            array('entry_id, dictionary_id, type_id, position, by_user_id', 'required'),
            array('entry_id, dictionary_id, type_id, position, by_user_id', 'numerical', 'integerOnly' => true),

            array('definition', 'filter', 'filter' => 'trim'),
            array('definition', 'filter', 'filter' => 'strip_tags'),
            array('date_updated, date_entered', 'date', 'format' => 'DD-MM-yyyy'),
    //			//The following rule is used by search().
    //			// @todo Please remove those attributes that should not be searched.
            array('id, entry_id, dictionary_id, source, type_id, definition, position, date_entered, date_updated, by_user_id', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
                        'dictionary' => array(self::BELONGS_TO, 'Dictionary', 'dictionary_id'),
			'entry' => array(self::BELONGS_TO, 'Entry', 'entry_id'),			
			'type' => array(self::BELONGS_TO, 'Type', 'type_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
                        'dictionary_id' => 'Dictionary',
			'entry_id' => 'Entry',
			'source' => 'Source',
			'type_id' => 'Type',
			'definition' => 'Definition',
			'position' => 'Position',
			'date_entered' => 'Date Entered',
			'date_updated' => 'Date Updated',
			'by_user_id' => 'By User',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id,true);
                $criteria->compare('dictionary_id',$this->dictionary_id,true);
		$criteria->compare('entry_id',$this->entry_id,true);
		$criteria->compare('source',$this->source,true);
		$criteria->compare('type_id',$this->type_id,true);
		$criteria->compare('definition',$this->definition,true);
		$criteria->compare('position',$this->position,true);
		$criteria->compare('date_entered',$this->date_entered,true);
		$criteria->compare('date_updated',$this->date_updated,true);
		$criteria->compare('by_user_id',$this->by_user_id,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Definition the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
    
    /**
     * Return the list of options to the type of entry.
     */
    public function typeOptions()
    {
        $options = Type::model()->findAll(array('select' => 'id, name'));
        return CHtml::listData($options, 'id', 'name');
    }
    
    public function dictionaryOptions()
    {
        $options = Dictionary::model()->findAll(array('select' => 'id, name'));
        return CHtml::listData($options, 'id', 'name');
    }
}
