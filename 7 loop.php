<?php
$numbers = [100, 1, 55, 3, 4, 17, 16, 45]; // 0 indexed
$countries = [
    "bangladesh" => "dhaka", //key value
    "nepal" => "kathmandu",
    "bhutan" => "thimpu",
    "srilanka" => "colombo"
];

// $numberOfItems = count($numbers);
// for ($i = 0; $i < $numberOfItems; $i++) {
//     echo $numbers[$i];
//     echo PHP_EOL;
// }

foreach ($numbers as $number) {
    echo $number;
    echo PHP_EOL;
}

foreach ($countries as $country) {
    echo $country;
    echo PHP_EOL;
}

foreach ($countries as $country => $capital) {
    echo "$country = $capital";
    echo PHP_EOL;
}