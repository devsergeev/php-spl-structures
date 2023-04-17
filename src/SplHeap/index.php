<?php
declare(strict_types=1);

$heap = new SplMaxHeap();
$heap->insert(111);
$heap->insert(666);
$heap->insert(777);
$heap->insert('ывавыаыв');

echo $heap->extract() . PHP_EOL; // 777
echo $heap->extract() . PHP_EOL; // 666
echo $heap->extract() . PHP_EOL; // 111
echo $heap->extract() . PHP_EOL; // 111

$heap = new SplMinHeap();
$heap->insert('111');
$heap->insert('666');
$heap->insert('ывавыаыв');
$heap->insert('777');

echo $heap->extract() . PHP_EOL;; // 111
echo $heap->extract() . PHP_EOL;; // 666
echo $heap->extract() . PHP_EOL;; // 777
echo $heap->extract() . PHP_EOL;; // 777
