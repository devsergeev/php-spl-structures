<?php
declare(strict_types=1);

$q = new SplStack();
$q[] = 1;
$q[] = 2;
$q[] = 3;
$q->push(4);
$q->add(2,5);

foreach ($q as $elem) {
    echo $elem . "\n";
}
/*
echo "---" . PHP_EOL;

$q->rewind();
while($q->valid()){
    echo $q->current(),"\n";
    $q->next();
}*/
