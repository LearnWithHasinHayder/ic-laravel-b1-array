<?php
// $countries = [
//     "bangladesh" => "dhaka", //key value
//     "nepal" => "kathmandu",
//     "bhutan" => "thimpu",
//     "srilanka" => "colombo"
// ];

// echo json_encode($countries);
// echo json_encode($countries, JSON_PRETTY_PRINT);

$json = '{"bangladesh":"dhaka","nepal":"kathmandu","bhutan":"thimpu","srilanka":"colombo"}';
$countries = json_decode($json, true);
print_r($countries);