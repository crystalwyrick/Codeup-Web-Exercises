<?php
class Person
{
	public $firstName;
	public $lastName;

	public function __construct($fname = 'Codeup', $lname = 'Hampton') 
	{
		$this->firstName = $fname;
		$this->lastName = $lname;
	}

	public function sayHello() 
	{
		return "Hi my name is $this->firstName $this->lastName";
	}

	public function changeName($fname, $lname)
	{
		$this->firstName = $fname;
		$this->lastName = $lname;

	}
}
	$me = new Person();
	echo $me->sayHello() . PHP_EOL;
	$me->changeName('Doug', 'Adams');
	echo $me->sayHello() . PHP_EOL;
