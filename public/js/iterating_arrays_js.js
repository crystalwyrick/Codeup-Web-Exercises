// // todo:
// // Create an array of 4 names using literal array notation, 
// // in a variable called 'names'.


// var names = ["John", "Paul", "George", "Ringo", "Bob Dylan"];

// 	console.log(names.length);

// function sayHi(name) {
// 	console.log("Hello, " + name);
// }

// 	// console.log(names[0]);
// 	// console.log(names[1]);
// 	// console.log(names[2]);
// 	// console.log(names[3]);

// // BETTER:
// for(var i = 0; i < names.length; i +=1) {
// 	// console.log(names[i]);
// 	// sayHi(names[i]);
// 	 console.log('The name at index ' + i + ' is: ' + names[i]);
// });

// }

// //////////////////////////////
// // "anonymous finction" more common use (dont have to worry about the length of the array); also the same as the "for loop" above:
// names.forEach(function (element, index, array) {
//  console.log('The name at index ' + index + ' is: ' + element);
// });

// // same as above but less common:
// function iterateNames(element, index, array) {
// 	console.log("The name at index " + index + " is " + element);
// }

// names.forEach(iterateNames);





// var shapes = ["octogon", "sphere", "square", "rectangle"];

// shapes.forEach(function(shape, index, array) {
// 	console.log("The shape at index " + index + " is " + shape);
// });

// todo:
// Create a log statement that will log the 
// number of elements in the names array.

// todo:
// Create log statements that will print 
// each of the names array elements individually.


var holidays = ["Halloween", "Thanksgiving", "Christmas", "New Year's Day", "Valentine's Day"]
	console.log(holidays);

	for(var i = 0; i < holidays.length; i +=1) {
	console.log(holidays[i]);
}

holidays.forEach(function (holidays, index, array) {
	console.log(holidays);
});





// Open the HTML file named iterating_arrays_js.html within the ~/vagrant-lamp/sites/codeup.dev/public folder that you created in the last lesson.
// Modify the code that logs out the names array elements individually to instead use a for loop.
// Below the for loop, use a forEach loop to print the names again.
// View the results in your browser to test for the expected output.
// Finally, save your work, commit the changes to your git repository, and push to GitHub.










