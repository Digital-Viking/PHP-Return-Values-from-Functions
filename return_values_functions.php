<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>

<?php

function addNumbers($number1, $number2){

    $sum = $number1 + $number2;
    return $sum;

}

$result = addNumbers(34,64);
echo $result;
// 98

// echo "<br>";

// I could also add this if I wanted to;
// $result = addNumbers(100, $result);
// echo $result;
// 198
    
// echo "<br>";

// $result = addNumber(10000, $result);
// echo $result;
// 10198


?>

</body>
</html>
