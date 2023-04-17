<?php

declare(strict_types=1);

$s = new SplObjectStorage();
$a = new stdClass;

$s->attach($a);
var_dump($s);

$s[$a] = 'vvv';
var_dump($s);
