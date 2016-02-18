"use strict";

// *** 2 examples of counting loop iterations with a for loop:

for (var i = 0; i < 10; i++) {
    console.log('for loop iteration #' + i);
}

// // first and third loop expressions omited:
var i = 0;

for (; i < 10;) {
    console.log('for loop iteration #' + i);
    i++;
}

// -------------------------------

// for loop from 100 to 0 in increments of 5:
for (var i = 100; i >= 0; i -= 5) {
	console.log(i);
}

// incrementing 2 variables and mulitplying them:
for(var i = 9; i <= 11; i++) {
  for(var x = 0; x < 11; x++) {
    console.log (i * x)
  }
}

// incrementing by 1 and mult by 9:
for (var i = 0; i < 11; i++) {
	console.log(i*9)
}

