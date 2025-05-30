<?php
$countries = [
    "bangladesh" => "dhaka", //key value
    "nepal" => "kathmandu",
    "bhutan" => "himpu",
    "Bangladesh" => "Dhaka"
];

$countries['bhutan'] = "thimpu";


print_r($countries);
echo $countries['Bangladesh'];