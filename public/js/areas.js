function areaRectangle(length,width) {
	var area = length * width;
	return area;
}
	var rectangleArea = areaRectangle(15, 8);
	console.log(rectangleArea);

function areaTriangle(base,height) {
	var area = (base * height)/2
	return area;
}
	var triangleArea = areaTriangle(9, 8);
	console.log(triangleArea);

function areaCircle(radius,pi) {
	var area = (Math.PI) * (radius * radius)
	return area;
}
	var circleArea = areaCircle (3, 3.14)
	console.log(circleArea);

function perimeterCircle(radius,pi) {
	var area = (radius * pi) * 2
	return area;
}
	var circlePerimeter = perimeterCircle (3, 3.14)
	console.log(circlePerimeter);

function areaTrapezoid(base1,base2,height) {
	var area = (((base1 + base2)/2) * height)
	return area;
}
	var trapezoidArea = areaTrapezoid (15, 6, 8)
	console.log(trapezoidArea);

// function areaStarOFDavid()
// 	var sideOfEqualTri = 4;

	function areaOfEqualTri(side) {
		return (Math.sqrt(3) / 4) * (Math.pow(side, 2));

	}

	function areaOfHexagon(side) {
		return (3 * Math.sqrt(3)) / 2) * (Math.pow(side, 2));
	}
	var areaOfStarOfDavid = (areaOfEqualTri(side)) * 6);

	console.log(areaOfStarOfDavid);

// Extra Challenge:
// 	area of Star of David
// 		each side = 4

(2*2) + (4*4) = 

Math.sqrt(20)

// / function areaOfRectangle(length,width) {
// // 	var area = length * width;
// 	return area;
// }

// var rectangleArea = areaOfRectangle(10, 5);
// console.log(rectangleArea);






// trapazoid: ht=8, length of right triangle=9, length of rectangle=15



