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

       $names= array_map("extractName" , $persons);
       print_r($names);

       $marios=array_filter($persons , function ($person)
       {
           return $person["surname"]=="Mario";
       });
       
       print_r($marios);

?>