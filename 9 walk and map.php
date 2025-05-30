<?php
$numbers = [100, 1, 55, 3, 4, 17, 16, 45]; // 0 indexed
$square = [];

array_walk($numbers, function ($number) {
    echo "Current item is $number\n";
});

// foreach ($numbers as $number) {
//     $square[] = $number * $number;
// }

$square = array_map(function ($number) {
    return $number * $number;
}, $numbers);

print_r($square);
