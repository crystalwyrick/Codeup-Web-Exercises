
(function () {
	var myNameIs = 'Crystal'; // todo: Fill in your name here.

function sayHello(fname) {
	console.log("Hello " + fname);
}

	sayHello(myNameIs);



var random = Math.floor((Math.random()*100)+1);


function isOdd(number) {
	var message = (number % 2 !== 0) ? number + " is odd" : number + " is even";
	console.log(message);
}
	isOdd(random);

})();