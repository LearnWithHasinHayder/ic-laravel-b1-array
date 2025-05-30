<?php
$numbers = [3, 4, 17, 16, 45]; // 0 indexed
$blank = [];
$countries = [
    "bangladesh" => "dhaka", //key value
    "nepal" => "kathmandu",
    "bhutan" => "himpu",
];

$countries['srilanka'] = 'colombo';
print_r($countries);

// $items = count($countries); //length - number of items
// echo $items;

//add items
// $numbers[] = 21;//end
// array_push($numbers, 22); //end
// array_unshift($numbers, 7); //beginning

$lastItem = array_pop($numbers);
$firstItem = array_shift($numbers);
print_r($numbers);
// echo $lastItem;
echo $firstItem;