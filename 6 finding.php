<?php
$numbers = [100, 1, 55, 3, 4, 17, 16, 45]; // 0 indexed
$countries = [
    "bangladesh" => "dhaka", //key value
    "nepal" => "kathmandu",
    "bhutan" => "thimpu",
    "srilanka" => "colombo"
];

if (array_search("dhaka", $countries) !== false) {
    echo "Dhaka Found\n";
}

if (array_key_exists('bangladesh', $countries)) {
    echo "Bangladesh\n";
}

// $found = in_array(16, $numbers);
// if ($found) {
//     $position = array_search(16, $numbers);
//     echo "16 is found at $position";
// }

if ($position = array_search(16, $numbers) !== false) {
    echo "16 is found at $position \n";
}


if ($position = array_search(100, $numbers) !== false) {
    echo "100 is found at $position";
}

