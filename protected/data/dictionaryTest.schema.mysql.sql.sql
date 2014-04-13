CREATE TABLE IF NOT EXISTS yii_dictionary.dictionary(
  id INT UNSIGNED NOT NULL AUTO_INCREMENT,
  name VARCHAR(100) NOT NULL,
  date_entered TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  date_updated DATETIME NULL,
  by_user_id INT UNSIGNED NULL,
  PRIMARY KEY (id))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

CREATE TABLE IF NOT EXISTS yii_dictionary.entry(
  id INT UNSIGNED NOT NULL AUTO_INCREMENT,
  name VARCHAR(100) NOT NULL,
  date_entered TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  date_updated DATETIME NULL,
  by_user_id INT UNSIGNED NULL,
  PRIMARY KEY (id))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

CREATE TABLE IF NOT EXISTS yii_dictionary.user(
  id INT UNSIGNED NOT NULL AUTO_INCREMENT,
  username VARCHAR(50) NOT NULL,
  password VARCHAR(100) NOT NULL,
  type TINYINT NOT NULL DEFAULT 0,
  date_entered TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  date_updated DATETIME NULL,
  by_user_id INT UNSIGNED NULL,
  PRIMARY KEY (id))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

CREATE TABLE IF NOT EXISTS yii_dictionary.type(
  id INT UNSIGNED NOT NULL AUTO_INCREMENT,
  name VARCHAR(100) NOT NULL,
  symbol VARCHAR(5),
  date_entered TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  date_updated DATETIME NULL,
  by_user_id INT UNSIGNED NULL,
  PRIMARY KEY (id))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;



CREATE TABLE IF NOT EXISTS yii_dictionary.definition(
  id INT UNSIGNED NOT NULL AUTO_INCREMENT,
  dictionary_id INT UNSIGNED NOT NULL,
  entry_id INT UNSIGNED NOT NULL,
  source VARCHAR(200),
  type_id INT UNSIGNED NULL,
  definition MEDIUMTEXT NULL,
  position INT UNSIGNED NOT NULL,
  date_entered TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  date_updated DATETIME NULL,
  by_user_id INT UNSIGNED NULL,
  PRIMARY KEY (id),
  INDEX fk_definition_entry_idx (entry_id ASC),  
  INDEX fk_definition_type_idx (type_id ASC),
  INDEX fk_definition_dictionary_idx (dictionary_id ASC),
  CONSTRAINT fk_definition_dictionary
    FOREIGN KEY (dictionary_id)
    REFERENCES yii_dictionary.dictionary (id)
    ON DELETE RESTRICT
    ON UPDATE CASCADE,
  CONSTRAINT fk_definition_entry
    FOREIGN KEY (entry_id)
    REFERENCES yii_dictionary.entry (id)
    ON DELETE RESTRICT
    ON UPDATE CASCADE,
  CONSTRAINT fk_definition_type
    FOREIGN KEY (type_id)
    REFERENCES yii_dictionary.type (id)
    ON DELETE RESTRICT
    ON UPDATE CASCADE,
  CONSTRAINT uc_entryId_typeId UNIQUE (entry_id, type_id))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;


