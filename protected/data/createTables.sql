-- --------------------------------------------------------------------------------
-- Routine DDL
-- Note: comments before and after the routine body will not be stored by the server
-- --------------------------------------------------------------------------------
DELIMITER $$

CREATE DEFINER=`dictionary`@`localhost` PROCEDURE `createTables`()
BEGIN
declare my_id int;
declare my_word varchar(100);
declare my_definition varchar(500);
declare my_source varchar(100);

declare entry_id int default 0;
declare dictionary_id int default 0;

declare cur1 cursor for SELECT `definitions`, `ID`, `source`, `word` FROM dictionary_mdb;



    open cur1;
    igmLoop: loop
        fetch cur1 into my_definition, my_id, my_source, my_word;

		INSERT INTO entry (`name`) VALUES (my_word);
		
		SET entry_id = last_insert_id();
		
		SELECT `id` into dictionary_id FROM dictionary WHERE `name` = my_source;
		
		
		INSERT INTO definition (`definition`, `entry_id`, `dictionary_id`, `position`, `type_id`) VALUES(my_definition, entry_id, dictionary_id, 1, 1);
        
    end loop igmLoop;
    close cur1;
END
