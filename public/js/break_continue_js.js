"use strict";
// Use console.log to log all the odd numbers from 1 to 50, 
// except the random odd number you generated, by using break and continue. 

// use Math.floor((Math.random()*50)+1) to generate a random number from 1-50
do {
	var random = Math.floor((Math.random() * 50) +1);

	if(random % 2 !== 0) {
		console.log("Random odd number to skip is: " + random);
		break;
	}

	console.log(random + " was even. Generating a new random number.")
} while (random % 2 == 0);

		
for(var i = 1; i < 50; i += 2) {
		
// 	// check if random is = i, 
// 	// output "Yikes, skipping random" + random
	if(i == random) {
		console.log("Yikes, skipping number:" + random )
		continue;
	}
	console.log("Here is an odd number: " + i);
}


