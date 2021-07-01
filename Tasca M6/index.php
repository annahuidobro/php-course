<?php

//Level 1. Exercise 1. Subtraction function
function subtraction($x, $y)
{
    echo "Substraction of $x and $y: ";
    return $x - $y;
}

echo subtraction(10, 2);
echo "<br>";
echo "<br>";
//Level 1. Exercise 2 and 3. Even or odd function

function evenOrOdd($x)
{
    if ($x % 2 == 0) {
        echo "$x is even";
    } else {
        echo "$x is odd";
    }
}

echo "Even or odd function (trying with 33):";
evenOrOdd(33);
echo "<br>";
echo "<br>";
//Level 1. Exercise 4. Loop example
echo "Loop example: <br>";
for ($i = 1; $i <= 10; $i++) {
    echo $i;
    echo "<br>";
}

//Level 2. Exercise 1. Loop example with increment of 2
echo "Second loop example with increments of two: <br>";
for ($i = 1; $i <= 10; $i += 2) {
    echo $i;
    echo "<br>";
}
//Level 2. Exercise 2 and 3. Loop function with variable ending (with default ending at 10)
echo "Loop function with variable ending (with default ending at 10): <br>";
function breakCount($end = 10)
{
    for ($j = 1; $j <= $end; $j++) {
        echo $j;
        echo "<br>";
    }
}

echo "Counting until 5, Count (5): ";
echo "<br>";
echo breakCount(5);
echo "<br>";
echo "Count (): "; //using the default value of 10
echo "<br>";
echo breakCount();
echo "<br>";
echo "<br>";

//Level 3. Exercise 1.Years of olympic games function
echo "Every year where the Olympics took place from 1960 including until 2016:";
echo "<br>";
$year = 1960;
while ($year <= 2016) {
    echo $year;
    echo "<br>";
    $year += 4;
}
echo "<br>";
echo "<br>";
//Level 3. Exercise 2. Purchase function
echo "Purchase function";
echo "<br>";
$prices = [1, 0.5, 1.5];
$num = [2, 1, 1];
$total = 0;
for ($p = 0; $p < 3; $p++) {
    $total += $prices[$p] * $num[$p];
    echo "Subtotal= " . $total;
    echo "<br>";
}
echo "Total purchase: " . $total;
echo "<br>";
echo "<br>";

//Level 3. Exercise 3. Eratóstenes screening function

function eratostenes($maxNumber)
{
    // Declare initial variables
    $numbers = [];
    $firstNumber = 2;

    // Initialize the series of numbers, we use "$maxNumber - 1" because array begins at 0 (position)
    while (count($numbers) < $maxNumber - 1) {
        array_push($numbers, [
            'value' => $firstNumber,
            'is_lined' => false,
        ]);

        $firstNumber++;
    }

    $viewing = [];

    for ($i = 0; $i <= floor(sqrt($maxNumber)); $i++) {
        array_push($viewing, $numbers[$i]['value']);

        for ($j = 0; $j <= count($numbers); $j++) {
            if (in_array($numbers[$j]['value'], $viewing) === true) {
                continue;
            }

            if ($numbers[$j]['value'] % $numbers[$i]['value'] === 0 && isset($numbers[$j])) {
                $numbers[$j]['is_lined'] = true;
            }
        }
    }

    foreach ($numbers as $number) {
        if ($number['is_lined'] === false) {
            echo $number['value'] . ' ';
        }
    }
}

//Trying eratostenes screening until 20
echo "Trying eratostenes screening until 100";
echo "<br>";
eratostenes(100);
echo "<br>";
echo "<br>";