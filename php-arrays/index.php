<?php

require 'functions.php';

$names = ['Jeff', 'John', 'Mary'];

// dd($names);

is_adult(15);

$animals = ['tiger', 'rabbit', 'emu', 'camel', 'horse'];
// add a new animal to the array with $animals[] = 'elephant';

// iterating over Arrays
// foreach ($names as $name) {
//   echo $name . ', ';
// }

// associative arrays consists of key-value pairs
$person = [
    'age' => 35,
    'hair' => 'brown',
    'title' => 'web developer'
];

// pushing a new item into an array
$person['name'] = 'Jeff';

// removing an item from an array using unset
unset($person['age']);

$task = [
   'title' => 'learn PHP',
   'due' => 'ASAP',
   'assigned_to' => 'Jeffrey',
   'completed' => true,
   'required' => true
];


// printing to the 'console'
// echo prints a string - cannot print an entire array
// use a function called var_dump();
// var_dump($person);
// returns array(4) { ["age"]=> int(35) ["hair"]=> string(5) "brown" ["title"]=> string(13) "web developer" ["name"]=> string(4) "Jeff" }

// use die() on the var_dump to print just that and nothing else
// die(var_dump($person));


require 'index.view.php';
