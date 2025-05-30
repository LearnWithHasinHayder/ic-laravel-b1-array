<?php
$countries = [
    "bangladesh" => "dhaka", //key value
    "nepal" => "kathmandu",
    "bhutan" => "thimpu",
    "srilanka" => "colombo"
];

// $newCountries = array_keys($countries);
// print_r($newCountries);

$newCountries = array_filter($countries, function ($capital, $country) {
    if ($country[0] == 'b') {
        return true;
    }
}, ARRAY_FILTER_USE_BOTH);

print_r($newCountries);