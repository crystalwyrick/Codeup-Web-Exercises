<?php

function logMessage($logLevel, $message)
{
	// use built in function to name the file with the current date
    $today = date ("Y-m-d");
    // '2015-11-12'
    date_default_timezone_set("America/Chicago");
    $time = date('H:i:s');

    $filename = 'log-' . $today . 'log';
	$handle = fopen($filename, 'a');

	$data = $today . ' ' . $time . ' [' . $logLevel . '] ' . $message;
	fwrite($handle, $data . PHP_EOL);
    // $time3 = date('H:i:s', time());
    // echo "UTC:", time();
    fclose($handle);
}

function logInfo($message) {
	logMessage ("INFO", $message);
}

function logError($message) {
	logMessage ("ERROR", $message);
}

logInfo("This is an info message.");
logError("This is an error message.");
