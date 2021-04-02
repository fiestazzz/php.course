<?php
require './src/entity/User.php';


try {
    
    $conn = new PDO('mysql:dbname=corso_formarete;host=localhost' ,'root' , '');
    $query1 = $conn->prepare('Select * from User;');
    $query1->execute();
    $TabellaUser= $query1->fetchAll(PDO::FETCH_CLASS, 'User');
    print_r($TabellaUser);
} 
catch (\PDOException $e) 
{
    echo $e->getMessage()."\n";
    
}



?>