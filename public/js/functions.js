// function doSomething(param1) {
// 	console.log(param1)
// }

// doSomething("Hello World");

////////////////

"use strict";

// function areaOfRectangle(length,width) {
// 	var area = length * width;
// 	return area;
// }

// var rectangleArea = areaOfRectangle(10, 5);
// console.log(rectangleArea);

// var secondArea = areaOfRectangle(30, 3);
// console.log(secondArea);

///////////////////////////

// function isEven(input) {
// //     var remainder = input % 2;
// //     if (remainder === 0) {
// //         return true;
// //     } else {
// //         return false;
// //     }

// // OR ternary:

// 	return (input % 2 === 0) ? true: false;

// }

// console.log(isEven(403))

// function sum(a, b) {
//     return a + b;
// }

/////////////////////

// function isEven(input) {
// 	return (input % 2 === 0) ? true: false;
// }

// 	for(var i = 0; i<= 100; i++) {
// 		if(isEven(i)){ 
// 			console.log(i + " is even");
// 		}
// 	}

/////////////////////////

var myNameIs = 'Crystal'; // todo: Fill in your name here.

function sayHello(fname) {
	console.log("Hello " + fname);
}

	sayHello(myNameIs);



// todo:
// Create a function called 'sayHello' that takes a parameter 'fname'.
// When called, the function should log a message that says hello from the passed in name.

// todo: Call the function 'sayHello' passing the variable 'myNameIs' as a parameter.

// do not worry about the details of this line
// just know that it generates a random number between 1 and 100
// ///////////////////
var random = Math.floor((Math.random()*100)+1);

// function randomNumber(min, max) {
// 	return Math.floor((Math.random()* max-min)+min);
// }

// console.log(randomNumber(5,20));
////////////////////////

function isOdd(number) {
	var message = (number % 2 !== 0) ? number + " is odd" : number + " is even";
	console.log(message);
}
	isOdd(random);


// todo:
// Create a function called 'isOdd' that takes a number as a parameter.
// The function should use the ternary operator to log a message.
// The log should tell the number passed in and whether it is odd or not.

// todo: Call the function 'isOdd' passing the variable 'random' as a parameter.







