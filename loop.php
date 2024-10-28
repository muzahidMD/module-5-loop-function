<?php
// for loop

for ($i = 1; $i < 10; $i++) {
    // echo $i . "\n";
    echo "\n";
    for ($j = 0; $j < $i; $j++) {
        echo "*";
    }
}
echo "\n";

// While loop

$i = 0;
while ($i < 10) {
    $i++;
    echo $i . PHP_EOL;
}
echo "\n";
// do-while loop
$i = 0;
do {
    $i++;
    echo $i . PHP_EOL;
} while ($i < 10);

echo "Go To \n";
// Go To 
$i = 0;
a:
$i++;
echo $i . PHP_EOL;
if ($i < 10)
    goto a;

for ($i = 10; $i > 0; $i--) {
    echo $i . PHP_EOL;
}