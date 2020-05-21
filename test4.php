<?php


$temperature = ['32.3', '31.3', '28.2', '29.3', '29.7', '29.9', '28.7', '28.4', '30.5', '30.5', '31.7', '30.6', '29.4', '32.0',
'36.2', '31.3', '32.8', '33.3', '32.9', '28.8', '30.8', '28.0', '25.9', '30.8', '32.4', '32.0', '31.3', '25.2',
'29.1', '28.6', '30.6'];

//total of temperatures

$total = array_sum ($temperature);

echo "<pre>";

echo "The total sum of the temperature is " . $total . " degrees." ;

echo "<br>";


//number of elements in array

$number = count ($temperature);

echo "<pre>";

echo "The number of days in January is " . $number . " days. ";

echo "<br>";


//average  of temp

$avarage = $total / $number ;

echo "<br>";

echo " The average temperature for January is " . ROUND($avarage, 1) . " degrees. ";

//sorting array to get high and low
echo "<br>";

sort ($temperature);

print_r($temperature);

//Low temperature

$lowTemp = array_slice($temperature, 0 , 5);

$lowTemp = implode (" , " , $lowTemp);

echo " The 5 lowest recorded temperatures in January were " . $lowTemp . " degrees. ";

echo "<br>";

//High temperature
$highTemp = array_slice($temperature, -5, 5);

$highTemp = implode (" , " , $highTemp);

echo " The 5 highest recorded temperatures in January were " . $highTemp . " degrees. ";
