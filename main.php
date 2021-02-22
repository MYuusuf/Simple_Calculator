<?php

echo "<h2><b>Welcome, here is a simple calculator!</b></h2>";

//declaring the variables
$num_1 = 9;
$num_2 = 4;

//creating the operations
$sum = $num_1+$num_2;
$sub = $num_1 - $num_2;
$mult = $num_1 * $num_2;
$div = $num_1 / $num_2;
$mod = $num_1 % $num_2;


//outputting the results

echo "<p>num_1 is $num_1, and num_2 is $num_2<p>";
echo "<h3>Addition</h3> $num_1 + $num_2 = $sum";
echo "<h3>Subtraction</h3> $num_1 - $num_2 = $sub";
echo "<h3>Multiplication</h3> $num_1 * $num_2 = $mult";
echo "<h3>Division</h3> $num_1 / $num_2 = $div";
echo "<h3>Modulus</h3> $num_1 % $num_2 = $mod";

?>
