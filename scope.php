<?php

// Global scope
// $name = "Earth"; // global

// function doSomething()
// {
//     // global $name;
//     // echo $name;
//     echo $GLOBALS['name'];
// }

// doSomething();


// Local scope
function doSomething()
{
    $name = "Earth"; //local 
}

doSomething();
echo $name;