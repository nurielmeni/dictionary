<?php
class AjaxController extends Controller
{    /**
	 * Reterns a JSON for entry, id.
	 */
    public function actionListEntries()
    {       
        if (isset($_GET['term'])) {
            $criteria = new CDbCriteria();
            $criteria->select = 'id, name';
            if (isset($_GET['option'])){
                switch ($_GET['option']){
                    case 0:
                        $criteria->condition = 'name LIKE :term';
                        $criteria->params = array(':term'=>$_GET['term'].'%');
                        break;
                    case 1:
                        $criteria->condition = 'name LIKE :term';
                        $criteria->params = array(':term'=>'%'.$_GET['term'].'%');
                        break;
                    case 2:
                        $criteria->condition = 'name = :term';
                        $criteria->params = array(':term'=>$_GET['term']);
                        break;
                }
            }
            else
            {
                $criteria->condition = 'name LIKE :term';
                $criteria->params = array(':term'=>'%'.$_GET['term'].'%');               
            }
            $res = Entry::model()->findAll($criteria);
            
            foreach ($res as $item){
                $returnVal[] = array(    
                    'value'=>$item->name,
                    'id'=>$item->id,
                );
            }
            echo CJSON::encode($returnVal);
            Yii::app()->end();
        }   
    }
	
    public function actionGetDefinitions()
    {
            $criteria = new CDbCriteria();
            $criteria->select = 'type_id, definition, position, source';
            $criteria->condition = 'entry_id = :entry_id';
            $criteria->order = 'position ASC';
            $criteria->params = array(':entry_id'=>$_GET['id']);
            $res = Definition::model()->with('type')->with('dictionary')->findAll($criteria);
            
            foreach ($res as $item){
                $returnVal[] = array(    
                    'type'=>$item->type->symbol,
                    'definition'=>$item->definition,
                    'position'=>$item->position,
                    'source'=>$item->source,
                    'dictionary'=>$item->dictionary->name,
                );
            }
            
            if (isset($returnVal))
                echo CJSON::encode($returnVal);
            else 
                echo CJSON::encode('');
            
            Yii::app()->end();
    }
        
    public function actionGetEntry()
    {
        if (isset($_POST['id']))
        {
            $entry = Entry::model()->findByPk($_POST['id']);           
            echo CJSON::encode($entry->name);
        }
        else
        {
            echo CJSON::encode('');
        }
        
        Yii::app()->end();
    }
}

