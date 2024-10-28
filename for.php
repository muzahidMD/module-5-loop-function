<?php

// for ($i = 2; $i <= 10; $i += 2) {
//     echo $i . "\n";
// }
// echo "\n";

// even number 

// for ($i = 1; $i <= 10; $i++) {
//     if ($i % 2 == 0) {
//         echo $i . "\n";
//     }
// }
$startCount = 60;
echo "This is heading\n";
for ($i = 0; $i <= $startCount; $i++) {
    echo "*";
}
echo "\n";
echo "This is paragraph This is paragraph This is paragraph This is paragraph This is paragraph  \n";
for ($i = 0; $i <= $startCount; $i++) {
    echo "*";
}
echo "\n";
echo "Signature";
echo "\n";

// using continue

for ($i = 1; $i <= 30; $i++) {
    // echo "I = $i \n";
    if ($i % 3 == 1 || $i % 3 == 2) {
        echo "{$i} is not divisible by 3 \n";
    }
    // if ($i % 3 == 0) {
    //     continue;
    // }
    // echo "{$i} is not divisible by 3 \n";
}