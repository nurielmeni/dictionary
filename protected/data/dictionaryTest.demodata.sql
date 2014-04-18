# Populate type table
INSERT INTO type (name, symbol) VALUES ('noun', 'n');
INSERT INTO type (name, symbol) VALUES ('verb', 'v');
INSERT INTO type (name, symbol) VALUES ('modifier', 'm');
INSERT INTO type (name, symbol) VALUES ('verb transitive', 'vt');
INSERT INTO type (name, symbol) VALUES ('verb intransitive', 'vi');
INSERT INTO type (name, symbol) VALUES ('adjective', 'adj');
INSERT INTO type (name, symbol) VALUES ('preposition', 'prep');

# Populate entry table
INSERT INTO entry (name) VALUES ('mind');
INSERT INTO entry (name) VALUES ('engram');
INSERT INTO entry (name) VALUES ('lock');

# Populate entry table
INSERT INTO dictionary (name) VALUES ('Hard To Find');
INSERT INTO dictionary (name) VALUES ('Pilot');
INSERT INTO dictionary (name) VALUES ('Tech');

# Populate definition table
#INSERT INTO definition (entry_id, source, type_id, position, definition) VALUES ('1', 'LRH ED 174', '1', '1', 'This is the first definition');
