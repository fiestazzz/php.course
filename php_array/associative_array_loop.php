<?php
    $persons = array
    (
        [
            "name" => "Paolo",
            "surname"=>"Verdi"
        ],
        [
            "name" => "Mario",
            "surname"=>"Rossi"
        ],
        [
            "name" => "Luigi",
            "surname"=>"Zan"
        ]
        );
        
        $result = "";
        foreach ($persons as  $person)
        {
            $result .= $person["name"]."\n";
        }
        echo $result;

        //Per creare un array 
        $names = [];
        foreach ($persons as  $person)
        {
            $names[] = $person["name"];
        }

        print_r($names);
       echo implode("|" ,$names );
?>