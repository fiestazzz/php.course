<?php
    $jsonString=file_get_contents('./dataset/Tasklist.json');
    $jsonArray=json_decode($jsonString, true);
    //var_dump($jsonString);
    print_r($jsonArray[17]['expirationDate']);
?>