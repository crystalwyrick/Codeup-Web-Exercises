<?php
	require_once 'Log.php';

	$test = new Log('cli');
	var_dump($test->filename);
	$test->logInfo('message');
	$test->logError('message');


	// the "new" keyword instantiates the class;



