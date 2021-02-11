<?php
    //gli array associativi sono gli array che hanno gli indici come stringhe
    //$task=array();
    $task = 
    [
        "taskName" => "Comprare il latte" , 
        "date" => "2021-02-11" , //// Y-m-d
        "id" => 4212
    ];
     echo $task["date"]."\n";

    $person= array
    (
        "name" => "Mario", 
        "surname" => "Rossi", 
        "birthday" => 24,
        "cf" => "xxxxxxxxxx",
        "address" => array
        (
            "street" => "Via Ormea",
            "number" => "22/2" , 
            "postcode" => "10076"
        )
            
        
    );
   //creiamo variabili usando dati negli array
    $name=$person["name"];
    $number = $person["address"]["number"];
    $street =$person["address"]["street"];
    //Stampiamo le variabili
    echo "$name abita in $street numero $number\n"; 


    $personNum = ["Mario" , "Rossi" , 25 , "xxxxxxxx" , ["Via Ormea" ,"22/2"]];

?>