<?php

define ('DB_HOST', '127.0.0.1'); 

define ('DB_NAME', 'employees');

define ('DB_USER', 'codeup');

define ('DB_PASS', 'password');

require 'db_connect.php';

echo $dbc->getAttribute(PDO::ATTR_CONNECTION_STATUS) . "\n";