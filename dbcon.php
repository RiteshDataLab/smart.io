<?php
require __DIR__.'/vendor/autoload.php';



use Kreait\Firebase\Factory;

$factory = (new Factory)
    ->withServiceAccount('key.json')
    ->withDatabaseUri('https://smart-e7b19-default-rtdb.firebaseio.com/');


$database = $factory->createDatabase();

// Create a Firebase Auth instance using the configured factory.
$auth = $factory->createAuth();


?>