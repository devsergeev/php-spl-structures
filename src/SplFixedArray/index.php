<?php
declare(strict_types=1);

$array = new SplFixedArray(5);

$array[1] = 2;
$array[4] = "foo";

var_dump($array[0]); // NULL
var_dump($array[1]); // int(2)
var_dump($array["4"]); // string(3) "foo"


$array->setSize(10);
$array[9] = "asdf";

$array->setSize(2);
