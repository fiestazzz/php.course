<?php
//array in php
$colors=array("red" , "blue" , "green");

/*print_r($color);

var_dump($color);*/

//ciclo for in php
for ($i=0; $i<count($colors) ; $i++) 
{
    echo "Indice $i corrisponde a $colors[$i]\n";
}

//color.push("rebeccapurple") per javascript

$colors[]="rebeccapurple";   //per aggiungere un elemento in un array di php

print_r($colors); //per stampare il nuovo array
$duplicate=[];
foreach ($colors as $key => $color) 
{
   echo "la chiave $key contiene $color \n";
   $duplicate[$key]=$color;

}
print_r($duplicate);


?>