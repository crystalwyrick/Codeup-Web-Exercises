<?php
require_once 'rectangle.php';
require_once 'square.php';


$rectangle1 = new Rectangle(12, 4);
echo $rectangle1->area() . PHP_EOL;

$rectangle2 = new Rectangle(5, 4);
echo $rectangle2-> area() . PHP_EOL;

$square1 = new Square(8);
echo $square1->perimeter() . PHP_EOL;
?>