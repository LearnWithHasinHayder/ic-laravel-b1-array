<?php
$numbers = [100, 1, 55, 3, 4, 17, 16, 45];
$chunks = array_chunk($numbers, 3);
print_r($chunks[0]);