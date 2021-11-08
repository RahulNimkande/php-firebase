<?php

require __DIR__.'/vendor/autoload.php';

use Kreait\Firebase\Factory;

$factory = (new Factory)
->withServiceAccount('php-firebase-7aee9-firebase-adminsdk-y6n62-dc48a94b80.json')
->withDatabaseUri('https://php-firebase-7aee9-default-rtdb.firebaseio.com/');

$database = $factory->createDatabase();

?>