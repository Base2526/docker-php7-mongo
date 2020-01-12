<?php
try {
    require 'vendor/autoload.php';  
    // Creating Connection  
    $con = new MongoDB\Client("mongodb://mongo:27017");  
    // Creating Database  
    $db = $con->javatpoint;  
    // Creating Document  
    $collection = $db->employee;  
    // Insering Record  
    $collection->insertOne( [ 'name' =>'Peter', 'email' =>'peter@abc.com' ] );  
    // Fetching Record  
    $record = $collection->find( [ 'name' =>'Peter'] );  
    foreach ($record as $employe) {  
        echo $employe['name'], ': ', $employe['email']."<br>";  
    }  

    // $changeStream = $collection->watch();
    // var_dump($changeStream);
    // for ($changeStream->rewind(); true; $changeStream->next()) {
    //     if ( ! $changeStream->valid()) {
    //         continue;
    //     }
 
    //     $event = $changeStream->current();
 
    //     if ($event['operationType'] === 'invalidate') {
    //         break;
    //     }

    //     echo $event['operationType'];
    // }
} catch (Exception $e) {
    echo 'Caught exception: ',  $e->getMessage(), "\n";
}


?>