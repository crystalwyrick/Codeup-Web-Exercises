<?php

require_once('User.php');

// $user = User::find(1);

// print_r($user) . PHP_EOL;



$contact = new User();
$contact->email = 'crystal@crystal.com';
$contact->name = 'crystal';
$contact->phone = '2105555555';
$contact->address = '100 Walnut';
$contact->city = 'San Antonio';
$contact->state = 'TX';
$contact->zip = '78248';
$contact->save();

$users = User::all();
foreach($users as $user){
	echo $user['name'] . PHP_EOL;
}

$user = User::find(1);
print_r($user) . PHP_EOL;
$user->name = 'isaak';
$user->save();

print_r($user);

?>