<?php
$students = [
    "john" => [
        "name" => "john",
        "physics" => 67,
        "chemistry" => 87,
        "math" => 100
    ],
    "jane" => [
        "name" => "jane",
        "physics" => 77,
        "chemistry" => 82,
        "math" => 95
    ]
];

$students['jane']['physics'] = 78;

echo "<pre>";
print_r($students);
echo "</pre>";