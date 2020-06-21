<?php

echo "<h1>Online Class: Functions</h1>";
/*
+---+
| 1 |
+---+
Declare the function named greeting. When this function is called,
it prints: "<p>Welcome to the well structured code.</p>";
*/
/*
Call the function.
*/

function greeting() {
    echo '<p>Welcome to the well structured code.</p>';
}
greeting();


// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 2 |
+---+
Declare the function named calculateArithmeticMean. 
This function has 3 parameters: a, b and c.
calculateArithmeticMean prints the arithmetic mean of a, b and c.
*/

/*
Call the function with the values for paremeters.
*/
function calculateArithmeticMean($a, $b, $c) {
    echo ($a + $b + $c)/3; 
}
calculateArithmeticMean(11,3,8);

// tvbsk separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 3 |
+---+
Declare the function named calculateTotalPrice. 
This function has 1 parameter: price.
calculateTotalPrice returns the total price after the tax of 13%.
*/

/*
Declare the variable total and assign it with the value 
that calculateTotalPrice outputs when it is called (with the value for price parameter).
*/

/*
Print total.
*/

$total = 89.99;
function calculateTotalPrice($price) {
    return $price * 1.13 ;
}
$totalWithTax = calculateTotalPrice($total);
echo $totalWithTax;

// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 4 |
+---+
Declare the global variable length and assign it with the value 12.
Declare the global variable width and assign it with the value 6.

Declare the function named calculateRectangleArea. 

This function calculates and prints the area of rectangle based on the 
global variables length and width.

Make these variables accessible inside the local scope, and do the calculation and printing
*/

/*
Call the function.
*/
$lenght = 12;
$width = 6;

function calculateRectangleArea () {
    echo $GLOBALS['area'] = $GLOBALS['lenght'] * $GLOBALS['width'];
}
calculateRectangleArea ();  
echo $area;

// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 5 |
+---+
If the function for calculating the area of a triangle looks like this:
*/
/*function calculateTriangleArea($base, $height) {
    $area =  ($base * $height) / 2;
}*/

/*
What can you do to make the $area accessible in global scope 
(without using the return statement)?
*/

/*
Choose the values for parameters and call the function.
*/

// Print $area.
$base = 12;
$height = 6;

function calculateTriangleArea() {
    echo $GLOBALS ['area'] = ($GLOBALS ['base'] * $GLOBALS ['height']) / 2;
}
calculateTriangleArea ();
echo $area;
   
?>
