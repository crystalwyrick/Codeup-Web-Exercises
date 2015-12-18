<?php

require ('db_connect.php');

echo $dbc->getAttribute(PDO::ATTR_CONNECTION_STATUS) . PHP_EOL;

$dropTable = 'DROP TABLE IF EXISTS contacts';

$dbc->exec($dropTable);

$createTable = 'CREATE TABLE contacts (
	id INT UNSIGNED NOT NULL AUTO_INCREMENT,
	email VARCHAR(50) NOT NULL,
	name VARCHAR(50) NOT NULL,
	phone VARCHAR(10) NOT NULL,
	address VARCHAR(50) NOT NULL,
	city VARCHAR(30) NOT NULL,
	state VARCHAR(2) NOT NULL,
	zip VARCHAR(7) NOT NULL,
	PRIMARY KEY (id)	
)';

$dbc->exec($createTable);




?>