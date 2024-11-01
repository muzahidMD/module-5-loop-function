<?php
include_once("function.php");

$x = 20;
if (isEven($x)) { //argument 
    echo "{$x} is an even number \n";
} else {
    echo "{$x} is an odd number \n";
}

$n = "5";
echo "Factorial of {$n} is " . factorial($n);
echo "\n";


// $ft = "Coffee";
// $ni = "4 cups";
serve("salad", "2 plats");

echo "\n";
echo sum(5, 6, 7);
echo "\n";
echo sum2(5, 6, 7);