// ignore these lines for now
// just know that the variable 'color' will end up with a random value from the colors array
var colors = ['red', 'orange', 'yellow', 'green', 'blue', 'indigo', 'violet'];
var color = colors[Math.floor(Math.random()*colors.length)];

var favorite = 'blue'; // TODO: change this to your favorite color from the list
console.log("Random color chosen is " + color);


// TODO: Create a block of if/else statements to check for every color except indigo and violet.
// TODO: When a color is encountered log a message that tells the color, and an object of that color.
//       Example: Blue is the color of the sky.

if (color=="red") {
    (message = "Roses are Red.");
}
else if (color=="orange") {
	(message = "Oranges are Orange.")
} 
else if (color=="yellow") {
    (message = "Sunflowers are Yellow.");
}
else if (color=="green") {
	(message = "Grass is Green.")
} 
else if (color=="blue"){
	(message = "My Favorite Color!")
}
else {
    (message = "I do not know anything by that color.");
}
console.log(message);



// var favorite = true;
var message = (color == favorite) ? "Yeah!": "I don't love it."; 
console.log(message);

console.log("My favorite color is " + favorite);
//console.log("this really works")



//if(success) {
//	var messsage = "Success";
//}	else {
//	var message = "Oops";
//}


//same as ternary:
//var success = true;

//console.log(message);

//var message = (success) ? "Success" : "Oops";

// TODO: Have a final else that will catch indigo and violet.
// TODO: In the else, log: I do not know anything by that color.

// TODO: Using the ternary operator, conditionally log a statement that
//       says whether the random color matches your favorite color.