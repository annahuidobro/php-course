<?php
//Level 1.Exercise 1
echo "Level 1. Exercise 1 <br>";
$var1 = 5;//declaration of an integer variable
$var2 = 13.52;//declaration of a double variable
$var3 = "String1";//declaration of a string variable
$var4 = true;// declaration of a boolean variable
echo "var1 is an integer variable an it's value is: $var1";
echo "<br>";
echo "var2 is a double variable an it's value is: $var2";
echo "<br>";
echo "var3 is a string variablean it's value is: $var3";
echo "<br>";
echo "var4 is a boolean variable an it's value is: $var4";
echo "<br>";
echo "<br>";
//Level 1.Exercise 2

$var5 = "String2"; //New string variable
echo "Level 1. Exercise 2 <br>";
echo "var5 is a string variable an it's value is: $var5";
echo "<br>";
echo "Length of var3: ";
echo strlen($var3);
echo "<br>";
echo "Length of var5: ";
echo strlen($var5);
echo "<br>";
echo "Concatenation of var3, an space and var5: ";
echo $var3 . ' ' . $var5;
echo "<br>";
echo "<br>";

//Level 1.Exercise 3
echo "Level 1. Exercise 3 <br>";
$name = "Anna";
$surname = "Huidobro";
echo "My name is: ";
echo $name . ' ' . $surname;
echo "<br>";
echo "My name in inverse order is: ";
echo strrev($name . ' ' . $surname);
echo "<br>";
echo "<br>";

//Level 2.Exercise 1
echo "Level 2. Exercise 1 <br>";
$numbers1 = array(1, 2, 3, 4, 5);
echo "array1: ($numbers1[0],$numbers1[1],$numbers1[2],$numbers1[3],$numbers1[4])";
echo "<br>";
$numbers2 = [6, 7, 8];
echo "array2: ($numbers2[0],$numbers2[1],$numbers2[2])";
echo "<br>";
echo "<br>";

//Level 2.Exercise 2
echo "Level 2. Exercise 2 <br>";
array_push($numbers2, 9);
echo "array2 after adding a value with push: ($numbers2[0],$numbers2[1],$numbers2[2],$numbers2[3])";
echo "<br>";
echo "<br>";

//Level 2.Exercise 3
//echo "Level 2. Exercise 3 <br>";
$array3 = array_merge($numbers1, $numbers2);

//Level 3.Exercise 1
echo "Level 3. Exercise 1 <br>";
echo var_dump($array3) . " >> this is my last array <br>";
echo "<br>";
echo "<br>";

//Level 3.Exercise 2
echo "Level 3. Exercise 2 <br>";
echo "<br>";
echo "Operating with integer variables <br>";
$x = 3;
echo "x value: $x";
echo "<br>";
$y = 5;
echo "y value: $y";
echo "<br>";
echo "x+y: " . ($x + $y) . "<br>";
echo "x-y: " . ($x - $y) . "<br>";
echo "x*y: " . ($x * $y), "<br>";
echo "x/y: " . ($x / $y) . "<br>";
echo "x%y: " . ($x % $y) . "<br>";
echo "<br>";
echo "Operating with double variables <br>";
$N = 1.23;
echo "N value: $N";
echo "<br>";
$M = 4.56;
echo "M value: $M";
echo "<br>";
echo "N+M: " . ($N + $M) . "<br>";
echo "N-M: " . ($N - $M) . "<br>";
echo "N*M: " . ($N * $M) . "<br>";
echo "N/M: " . ($N / $M) . "<br>";
echo "N%M: " . ($N % $M) . "<br>";



