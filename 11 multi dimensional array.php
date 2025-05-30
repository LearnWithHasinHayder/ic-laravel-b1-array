<?php

$students = [
    [
        "name" => "john",
        "physics" => 67,
        "chemistry" => 87,
        "math" => 100
    ],
    [
        "name" => "jane",
        "physics" => 77,
        "chemistry" => 82,
        "math" => 95
    ]
];

// 

print_r($students);
$students[1]['physics'] = 78;
print_r($students);