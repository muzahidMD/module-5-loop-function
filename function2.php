<?php
function printStar($startCount)
{
    for ($i = 0; $i <= $startCount; $i++) {
        echo "*";
    }
}

printStar(100);
echo PHP_EOL;
printStar(65);
echo PHP_EOL;
printStar(35);
echo PHP_EOL;
printStar(35);
printStar(35);

function trueOrFalse()
{
    if (false) {
        return "true";
    } else {
        return "false";
    }
}
echo trueOrFalse();
?>