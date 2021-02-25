<?php
require './test.php';
$dataset = array(
    ['gioco molto difficile','G.M.D.',__LINE__],
    ['General Motors','G.M.',__LINE__],
    ['Federal Bureau Investigation','F.B.I.',__LINE__]
    );


   /* foreach ($dataset as $key => $row)
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


*/

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .card-pass
    {
        color:#2d6a4f; 
        background-color:#c7f9cc ;
        border: 2px solid #80ed99;
        margin-top: 10px;
        height: 60px;
        width: 300px;
    }
    .card-fail
    {
        color:#d90429; 
        background-color:#EF8182 ;
        border: 2px solid #d90429;
        margin-top: 10px;
        height: 60px;
        width: 300px;
    }
    </style>
</head>
<body>
<?php  
    foreach ($dataset as $key => $row)
    {
        $valore=$row[0];
        $atteso=$row[1];
        $linea=$row[2];
    
        $result=acronimo($valore);
        if ($result == $atteso)
        {
            echo "<div class='card-pass'>'Pass ,tutto ok !<br> Stringa da testare: '$atteso'(".gettype($atteso).")<br> Stringa trasformata: $result (".gettype($result).") </div>"  ;                    
        }
        else
       {
           echo  "<div class=\'card-fail\'> 'FAIL - test fallito linea: $linea \n';</div>" ;            
           //var_dump($result);
            
       }
    }
?>
</body>
</html>