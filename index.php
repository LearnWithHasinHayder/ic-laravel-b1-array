<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
$countries = [
    "bangladesh" => "dhaka", //key value
    "nepal" => "kathmandu",
    "bhutan" => "thimpu",
    "srilanka" => "colombo"
];
$json = json_encode($countries);
echo "<script>";
echo "const countries = $json";
echo "</script>";
?>

<body>
    <h1>JSON Example</h1>

    <script>
        console.table(countries);
        console.log(countries.bangladesh);
    </script>
</body>

</html>