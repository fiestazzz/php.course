<?php
    $persons = array
    (
        [
            "name" => "Paolo",
            "surname"=>"Mario"
        ],
        [
            "name" => "Mario",
            "surname"=>"Mario"
        ],
        [
            "name" => "Luigi",
            "surname"=>"Zan"
        ]
        );
        
        function extractName($item)
        {

            return $item["name"];
        }

       $names= [];

       foreach ($persons as $person)
       {
           $names[]=$person["name"];
       }
       //filtro 
       $marios=[];
       foreach ($persons as $person) {
           if ($person["surname"]=="Mario")
           {
               array_push($marios,$person);
           }
       }

       print_r($marios);
       

?>