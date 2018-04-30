<!-- <?php
// declaring variables => $ followed by string $greeting

$greeting = 'Hello';
$name = 'Alan Chan';
// dif btw single and double quotes - single quotes won't print the variable
// interpolation
// echo "Hello, $name";

//concatenation using . notation
// echo 'Hello, ' . $name;

echo $greeting . ', ' . $name;
//👆 is the same as echo "{$greeting}, {$name}" but must include "", {} optional

?> -->
<?php

$greeting = 'Hello, World';

require 'index.view.php';
