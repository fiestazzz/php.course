<?php
require './test.php';
$dataset = array(
    ['gioco molto difficile','G.M.D.',__LINE__],
    ['General Motors','G.M.',__LINE__],
    ['Federal Bureau Investigation','F.B.I.',__LINE__]
    );


    foreach ($dataset as $key => $row)
    {
       $valore=$row[0];
       $atteso=$row[1];
       $linea=$row[2];

       $result=acronimo($valore);
       if ($result==$atteso)
       {
           //echo "Tutto Ok";
       }
       else
       {
           echo "error alla linea $linea";
       }
    }




?>