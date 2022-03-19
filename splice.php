<?php
// $input = array("red", "green", "blue", "yellow");
// array_splice($input, 2);
// var_dump($input);

$input = array("red", "green", "blue", "yellow");
$number = count($input);
array_splice($input, 2, 1);
var_dump($input);

// $input = array("red", "green", "blue", "yellow");
// array_splice($input, 1, count($input), "orange");
// var_dump($input);

// $input = array("red", "green", "blue", "yellow");
// array_splice($input, -1, 1, array("black", "maroon"));
// var_dump($input);
?>