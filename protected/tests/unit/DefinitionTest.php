<?php

/* *
 * 
 */

class DefinitionTest extends CTestCase
{
    public function testTypeOptions()
    {
        $typeOptions = Definition::model()->typeOptions();
        $this->assertTrue(is_array($typeOptions));
        $this->assertTrue(sizeof($typeOptions) > 0);
    }  
    
    public function testDictionaryOptions()
    {
        $dictionaryOptions = Definition::model()->dictionaryOptions();
        $this->assertTrue(is_array($dictionaryOptions));
        $this->assertTrue(sizeof($dictionaryOptions) > 0);
    }    
}
