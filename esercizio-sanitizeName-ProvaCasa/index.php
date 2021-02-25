<?php
require "test.php";
$dataset = [
   ['mario','Mario',__LINE__],
   ['mAriO','Mario',__LINE__],
   ['MARIO','Mario',__LINE__],
   ['De giovanni','De Giovanni',__LINE__],
   ['de giovanni','De Giovanni',__LINE__],
   ['de Giovanni','De Giovanni',__LINE__],
   ['de Giovanni      ','De Giovanni',__LINE__],
   ['de                     Giovanni      ','De Giovanni',__LINE__],
   ['de    Giovanni      ','De Giovanni',__LINE__],
   ['de 55 Giovanni','De Giovanni',__LINE__],
   ['Mario83','Mario',__LINE__],
   ['Mario@','Mario',__LINE__],
   ['Mario@     ','Mario',__LINE__],
   ['John Romita Sr.','John Romita Sr.',__LINE__],
   ['John Romita Jr.','John Romita Jr.',__LINE__],
   ['John Romita Jr.','John Romita Jr.',__LINE__],
   ['<h1>John123456789</h1>','John',__LINE__],
   ['<script>alert("ciccio")</script>','',__LINE__],
   ['    <h1>   John123456789   </h1>   ','John',__LINE__]

];



/*foreach ($dataset as $key => $row)
{
    $test=$row[0];
    $atteso=$row[1];
    $linea=$row[2];

    $result=sanitizeName($test);
    if ($result == $atteso)
    {
        echo "Pass ,tutto ok \n";
    }
    else
   {
       echo "FAIL - test fallito linea: $linea \n";
       //var_dump($result);
        
   }
}*/
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
        $test=$row[0];
        $atteso=$row[1];
        $linea=$row[2];
    
        $result=sanitizeName($test);
        if ($result == $atteso)
        {
            echo "<div class='card-pass'>'Pass ,tutto ok !<br> Stringa da testare: '$atteso'(".gettype($atteso).")<br> Stringa trasformata: $result (".gettype($result).") </div>"  ;                    
        }
        else
       {
           echo  "<div class=\'card-fail\'> 'FAIL - test fallito linea: $linea \n';</div>" ;            
            
            
       }
    }
?>
</body>
</html>