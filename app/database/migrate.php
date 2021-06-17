<?php

require __DIR__ . '/../autoload.php';

$shortopts = "f:";
$options = getopt($shortopts,array());


$migration = new Migration(
    new MySQL(),
    __DIR__ . "/migrations/",
    __DIR__ . "/seed/"
);

if(array_key_exists('f',$options)) {
    $file = $options['f'];
    $migration->performSeed($file);
}
else {

    $migration->migrate();
}

exit;



//$migration->performSeed(__DIR__ . '/testing/seed_testing.php');