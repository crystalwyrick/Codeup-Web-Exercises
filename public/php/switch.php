<?php

// echo "What is your name?";

// $name = strtolower(trim(fgets(STDIN)));

// var_dump($name);

// switch($name) {
// 	case 'ben': 
// 		echo "Welcome leader.\n";
// 		break;
// 	case 'cameron': 
// 		echo "Hello Carmen.\n";
// 		break;
// 	case 'ryan': 
// 		echo "Get down tonight.\n";
// 		break;
// 	default: 
// 		echo "That is not a valid name, goodbye";
// 		break;
// }

 // Set the default timezone
 date_default_timezone_set('America/Chicago');

 // Get Day of Week as number
 // 1 (for Monday) through 7 (for Sunday)
 $dayOfWeek = date('N');

 switch($dayOfWeek) {
     case 1:
	     echo "Monday";
	     break;
     case 2:
	     echo "Tuesday";
	     break;
     case 3:
	     echo "Wednesday";
	     break;
     case 4:
	     echo "Thursday";
	     break;
     case 5:
     	echo "Friday";
     	break;
     case 6:
     	echo "Saturday";
     	break;
     case 7:
     	echo "Sunday";
     	break;
     default:
     	echo "That is not a day of the week, sorry.";
     	break;
 }

 // Test and verify the results before proceeding by creating a matching if block. The output should be identical.
 if ($dayOfWeek == 1) {
 	echo "Monday";
 } else if ($dayOfWeek == 2) {
 	echo "Tuesday";
 } else if ($dayOfWeek == 3) {
 	echo "Wednesday";
 } else if ($dayOfWeek == 4) {
 	echo "Thursday";
 } else if ($dayOfWeek == 5) {
 	echo "Friday";
 } else if ($dayOfWeek == 6) {
 	echo "Saturday";
 } else if ($dayOfWeek == 7) {
 	echo "Sunday";
 } else {
 	echo "That is not a day of the week, sorry.";
 }

// switch(gettype($value)) {
//     case 'string':
//         echo '$value is a string';
//         break;
//     default:
//         echo '$value is not a string';
//         break;
// }