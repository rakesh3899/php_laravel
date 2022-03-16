<?php

/****
 * Arithmatical Operator
 */
$a = 5;
$b = 2;
echo $a % $b; // modulas

/****
 * Logical Operator
 */
$a = true;
$b = false;

var_dump($a && $b); // and 
var_dump($a || $b); // or 
var_dump(!$b); // not 
var_dump($a && $b); // and 


/****
 * Comparison Operator
 */
$a = 8;
$b = 9;
$c = 8;
$d = 8.0;
var_dump($a == $b); // false
var_dump($a == $c); // true
var_dump($a === $d); // false
var_dump($a != $b); // true
var_dump($a > $b); // false
var_dump($a <= $b); // true

/*****
 * Increment / Decrement (pre-increment, post-increment)
 */

$a = 8;

echo ++$a; // print 9
echo $a++; // print 9 but after that will be increment 1
// here $a is 10


/****
 * String Operators
 */

$x = "Hello"; // Hello <> World
$y = "World!";
$x .= " ";
$x .= $y;
echo "1";
echo "\n";
echo $x;
