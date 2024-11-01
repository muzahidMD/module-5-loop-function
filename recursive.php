<?php
// recursion 
// recursive function

function printN($i)
{
    if ($i >= 10) {
        return;
    }
    echo $i . "\n";
    $i++;
    printN($i);
}
// printN(0);

function printNumber($counter, $end, $stepping = 1)
{
    if ($counter > $end) {
        return;
    }
    echo $counter . "\n";
    $counter += $stepping;
    printNumber($counter, $end, $stepping);
}
printNumber(21, 37, 2);


function fibonacci($old, $new, $end)
{
    static $start;
    $start = $start ?? 1;

    if ($start > $end) {
        return;
    }
    $start++;

    echo $old . " ";
    $_temp = $old + $new;
    $old = $new;
    $new = $_temp;

    fibonacci($old, $new, $end);
}

fibonacci(0, 1, 5);
echo "\n";

function countDown($x)
{
    if ($x <= 0) {
        return $x;
    }

    echo $x . "\n";
    countDown($x - 1);
}

countDown(10);