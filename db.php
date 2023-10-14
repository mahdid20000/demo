<?php
require __DIR__.'/vendor/autoload.php';
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;
$jsonFilePath = __DIR__.'/task-d4a8c-firebase-adminsdk-l714g-a541612e09.json';
if (file_exists($jsonFilePath) && is_readable($jsonFilePath)) {
    $factory = (new Factory)->withServiceAccount($jsonFilePath)
    ->withDatabaseUri('https://task-d4a8c-default-rtdb.firebaseio.com/'); 
    $database = $factory->createDatabase();
}

?>