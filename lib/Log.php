<?php

class Log
{
	public $filename = '';
	public $handle;

	public function __construct($prefix ='log')
	{
	    $today = date ("Y-m-d");
	    $this->filename = $prefix . '-' . $today . 'log';

	}


	// function __construct runs first - constructors runs every time the class instantiates
	public function logMessage($logLevel, $message)
	{
	 
	    date_default_timezone_set("America/Chicago");
	    $time = date('H:i:s');

		$handle = fopen($this->filename, 'a');

		$today = date ("Y-m-d");
		$data = $today . ' ' . $time . ' [' . $logLevel . '] ' . $message;
		fwrite($handle, $data . PHP_EOL);
	   
	    fclose($handle);
	}
	public function logInfo($message)
	{
		$this->logMessage ("INFO", $message);
	}
	public function logError($message)
	{
		$this->logMessage ("ERROR", $message);
	}
}

?>