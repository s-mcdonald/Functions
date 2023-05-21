<?php

include_once '../vendor/autoload.php';

echo "Default bias at 60% true" , PHP_EOL;
for ($i = 0; $i < 10; $i++) {
    echo $i . ' ' . rand_bias() . PHP_EOL;
}

echo "Random bias at 70% true" , PHP_EOL;
for ($i = 0; $i < 10; $i++) {
    echo $i . ' ' . rand_bias(70) . PHP_EOL;
}

echo "Random bool" , PHP_EOL;
for ($i = 0; $i < 10; $i++) {
    echo $i . ' ' . random_bool() . PHP_EOL;
}

$myarray = [
    'David',
    'Matthew',
    'Mark',
    'James',
    'John',
    'Paul',
    'Michael',
    'Daniel',
    'Robert',
    'Andrew',
    'Thomas',
    'Joseph',
    'Anthony',
    'William',
    'Christopher',
    'Steven',
    'Richard',
    'Benjamin',
    'Charles',
    'George',
];

$results = [];

for ($i = 0; $i < 1000; $i++) {
    $r = array_rand_bias($myarray);

    if (!isset($results[$r])) {
        $results[$r] = 0;
    }
    $results[$r] = ++$results[$r];
}

$results = array_flip($results);
ksort($results);

foreach($results as $times => $name) {
    if ($times !== 0) {
        echo sprintf(
            "The name `%s` was hit `%s` times",
            $name,
            $times
        ) . PHP_EOL;
    }
}

echo  PHP_EOL;
