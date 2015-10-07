// HIGH LOW CHALLENGE

// 1. Generate a random number
// 2. Have the user guess the number
// 3. Check the user's guess with the random number
// 4. If they guess high or low let them know
// 5. Have the user keep guessing until they get it right

// Extra:
// 1. Set a guess limit
// 2. Make an option to play again(new random number)



do {

	var random = Math.floor((Math.random()*100)+1) 

	do {
		response = prompt("Please guess a number between 1 and 100");

		if(parseInt(response)) {
			if(response > random) {
				alert("Guess a lower number");
			} else {
				if (response < random) {
					alert("Guess a higher number");
				}
			}
		} else {
			alert("Please make sure you are entering a number");
		}
	} while(response != random);

	confirmed = confirm("CONGRATULATIONS - would you like to play again");
} while(confirmed);

// USER INPUT AREAS

// 1. Ask for a shape to calculate(use the shapes from earlier exercise)
// 2. Ask for all the information you need to find the area
// 3. Display the calculated area



// Extra:
// 1. Round the area to the second decimal place
// 2. Ask if they want to calculate another shape's area