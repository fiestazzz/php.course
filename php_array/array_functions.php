<?php
$names =["Mario" , "Luigi" ,"Paolo"];

//Cerchiamo se il valore mario è presente nell'array

//$find = false;
//Caso in cui vogliamo utilizzarlo solo una volta

/*foreach ($names as $name)
{
    if ($name === "Mario")
    {
        $find= true;
        break;
    }
}*/
//Trasformiamo tutto in una funzione
function findName(string $nameToFind , array $names):bool
{
    foreach ($names as $name)
{
    if ($name === $nameToFind)
    {
        return true;
    }
}
return false;
}
//funzione uguale a quello sopra  , creata dagli sviluppatori php già pronta.
var_dump(in_array("Mario" ,$names )) ;
var_dump(findName("Mario" , $names)) ;


?>