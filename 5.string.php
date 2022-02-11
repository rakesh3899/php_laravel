<?php

$val1 =  'This is string';

$val2 =  "Hello World $val1";
echo $val2;

echo "\n";

$name = "Some Name";
$age = 20;

$stmt = "My Name is " . $name . " & My age is " . $age;
//echo strlen($stmt);

echo str_replace("My Name", "Myself", $stmt);
