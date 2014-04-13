<?php

return CMap::mergeArray(
	require(dirname(__FILE__).'/main.php'),
	array(
		'components'=>array(
			'fixture'=>array(
				'class'=>'system.test.CDbFixtureManager',
			),
			/* uncomment the following to provide test database connection */
			'db'=>array(
                                'connectionString' => 'mysql:host=localhost;dbname=yii_dictionaryTest',
                                'emulatePrepare' => true,

                                // Helpfull for debugging DataBase queries.
                                'enableParamLogging' => true,
                                'username' => 'dictionary',
                                'password' => 'dictionary',
                                'charset' => 'utf8',
                        ),
			
		),
	)
);
