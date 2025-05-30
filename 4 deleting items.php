<?php
$numbers = [3, 4, 17, 16, 45]; // 0 indexed
$countries = [
    "bangladesh" => "dhaka", //key value
    "nepal" => "kathmandu",
    "bhutan" => "thimpu",
];

// print_r($numbers);
// unset($numbers[2]);
// $removedItems = array_splice($numbers, 2, 2);
// print_r($numbers);
// 

$removedItems = array_splice($numbers, 2);
// print_r($numbers);
$numbers[] = 100;
// print_r($numbers);
// print_r($removedItems);
$newArray = array_merge($numbers, $removedItems);
print_r($newArray);

unset($countries['bhutan']);
print_r($countries);