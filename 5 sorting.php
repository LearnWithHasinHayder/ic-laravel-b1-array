<?php
$numbers = [100, 1, 55, 3, 4, 17, 16, 45]; // 0 indexed
$countries = [
    "bangladesh" => "dhaka", //key value
    "nepal" => "kathmandu",
    "bhutan" => "thimpu",
    "srilanka" => "colombo"
];

sort($numbers);
rsort($numbers);
// asort($countries);
// arsort($countries);

// ksort($countries);
krsort($countries);
print_r($numbers);
print_r($countries);