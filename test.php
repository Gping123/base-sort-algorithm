<?php

require_once __DIR__.'./vendor/autoload.php';

use Src\BubbleSort\BubbleSort;
use Src\Quicksort\Quicksort;
use Src\SelectionSort\SelectionSort;
use Src\InsertionSort\InsertionSort;

$data = [35,85,35,25,4,21,2,4,1,85,45,78,35,14,52,33,44];

// $sort = new Quicksort($data);
// $sort = new BubbleSort($data);
// $sort = new SelectionSort($data);
$sort = new InsertionSort($data);

system('clear');
dump($data);
echo PHP_EOL;

function dump($data) {
    echo implode(",", $data);
}

dump($sort->sort('desc'));
echo PHP_EOL;
dump($sort->sort('asc'));
