"use strict";

var i = 1;

// *** multiply by two on each iteration of the loop ***
while (i < 65536) {
	i = i * 2;
	console.log(i);
}

// OR

// *** i is the exponent, increases by 1 on each iteration ***
while (i <= 16) {
	console.log(Math.pow (2,i));
	++i;
}





