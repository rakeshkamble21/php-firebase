<?php
    require __DIR__.'/vendor/autoload.php';
    use Kreait\Firebase\Factory;
    use Kreait\Firebase\ServiceAccount;


    //$serviceAccount=ServiceAccount::fromJsonFile(__DIR__.'/phpdemo-2f659-firebase-adminsdk-bd576-f95d507dc6.json');
    
    $factory = (new Factory)->withServiceAccount('plc-test-89784-firebase-adminsdk-j088d-913e2a8ecf.json')
        ->withDatabaseUri('https://plc-test-89784-default-rtdb.firebaseio.com/');
        //$auth = $factory->createAuth();

        $database=$factory->createDatabase();

?>