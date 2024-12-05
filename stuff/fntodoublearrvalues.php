<?php
function doubleValue($numbers) {
    $doubledArray = [];
    foreach ($numbers as $number) {
        $doubledArray[] = $number * 2;
    }
    return $doubledArray;
}

$originalArray = [1, 2, 3, 4, 5];
$doubledArray = doubleValue($originalArray);

echo "Original Array: " . implode(", ", $originalArray) . "<br>";
echo "Doubled Array: " . implode(", ", $doubledArray) . "<br>";
?>
