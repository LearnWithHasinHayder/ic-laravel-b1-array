<?php
$numbers = [100, 1, 55, 3, 4, 17, 16, 45]; // 0 indexed

$evenNumbers = [];
$oddNumbers = [];

// foreach ($numbers as $number) {
//     if ($number % 2 == 0) {
//         $evenNumbers[] = $number;
//     } else {
//         $oddNumbers[] = $number;
//     }
// }

$evenNumbers = array_filter($numbers, function ($number) {
    // if ($number % 2 == 0) {
    //     return true;
    // }
    return $number % 2 == 0;
});

//array map and walk

print_r($evenNumbers);
// print_r($oddNumbers);