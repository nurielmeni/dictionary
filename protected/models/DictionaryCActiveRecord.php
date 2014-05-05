<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DictionaryCActiveRecord
 * Common tasks and properties to all Dictionary Models
 * @author meni
 */
class DictionaryCActiveRecord extends CActiveRecord
{
    public function beforeSave(){
        if ($this->isNewRecord){
            $this->date_entered = new CDbExpression('NOW()');
            echo $this->date_entered;
        } else {
            $this->date_updated = new CDbExpression('NOW()');
            echo $this->date_updated;
        }
        
        if (Yii::app()->user->id){
            $this->by_user_id = Yii::app()->user->id;
        } else {
            $this->by_user_id = new CDbExpression('NULL');
        }
        return parent::beforeSave();
    }
}
