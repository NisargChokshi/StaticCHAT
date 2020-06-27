<?php 

    require __DIR__.'/vendor/autoload.php';

    use Kreait\Firebase\Factory;
    use Kreait\Firebase\ServiceAccount;

    $serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/fir-8b709-firebase-adminsdk-38mr1-aa06c921ac.json');

    $firebase = (new Factory)
      ->withServiceAccount($serviceAccount)
      ->withDatabaseUri('https://fir-8b709.firebaseio.com/')
      ->create();
  
    $database = $firebase->getDatabase();

?>