<?php

$var = 6;

$var = 10;
$my_constant = 10;
//echo $var;

define("PI", 3.1416);
define("CONFIG", ["host" => "localhost", "user" => "root", "password" => ""]);

echo CONFIG["user"];
