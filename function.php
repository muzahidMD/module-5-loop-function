<?php

function isEven($n) // parameter
{
    if ($n % 2 == 0) {
        return true;
    }
    return false;
}

function factorial(int $n)
{
    // if (gettype($n) != "integer") {
    //     return "invalid";
    // }
    $result = 1;
    for ($i = $n; $i > 1; $i--) {
        $result *= $i;
    }
    return $result;
}

// default value / optional parameter 
function serve($foodType = "Coffee", $numberOfItems = "1 Cup")
{
    echo "{$numberOfItems} of {$foodType} has/have been served";
}

function sum(int $x = 0, int $y = 0, int $z = 0): int
{
    return $x + $y + $z;
}
function sum2($x, $y, int ...$numbers): int
{
    echo $x . "\n";
    $result = 0;
    for ($i = 0; $i < count($numbers); $i++) {
        $result += $numbers[$i];
    }
    return $result;
}
echo sum2(5, 6, 7, 8, 2, 3, 4);
echo "\n";