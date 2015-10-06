"use strict";

// use Math.floor((Math.random()*50)+1) to generate a random number form 1-50
do {
	var random = Math.floor((Math.random() * 50) +1);

	if(random % 2 !== 0) {
		console.log("Random odd number to skip is: " + random);
		break;
	}

	console.log(random + " was even. Generating a new random number.")
} while (random % 2 == 0);

		
for(var i = 1; i<50; i+=2) {
		
		// check if random is = i, 
		// output "Yikes, skipping random" + random
		if(i == random) {
			console.log("Yikes, skipping number:" + random )
			continue;
		}
	console.log("Here is an odd number: " + i);
}

// Use console.log to log all the odd numbers from 1 to 50, 
// except the random odd number you generated, by using break and continue. 

// Output should look like:
// Random odd number to skip is: 27
// Here is an odd number: 1
// Here is an odd number: 3
// Here is an odd number: 5
// Here is an odd number: 7
// Here is an odd number: 9
// Here is an odd number: 11
// Here is an odd number: 13
// Here is an odd number: 15
// Here is an odd number: 17
// Here is an odd number: 19
// Here is an odd number: 21
// Here is an odd number: 23
// Here is an odd number: 25
// Yikes! Skipping number: 27
// Here is an odd number: 29
// Here is an odd number: 31
// Here is an odd number: 33
// Here is an odd number: 35
// Here is an odd number: 37
// Here is an odd number: 39
// Here is an odd number: 41
// Here is an odd number: 43
// Here is an odd number: 45
// Here is an odd number: 47
// Here is an odd number: 49/