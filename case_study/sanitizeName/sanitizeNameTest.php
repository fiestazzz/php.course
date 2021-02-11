<?php
$dataset = [
    ["mario" , "Mario"],
    ["mAriO" , "Mario"],
    ["MARIO" , "Mario"],
    ["De giovanni" , "De Giovanni"],
    ["Mario83" , "Mario"],
];
foreach ($dataset as $key => $row) 
{
   $text=$row[0];
   $atteso=$row[1];

   $result= sanitizeName($text);

   if($result==$atteso)
   {
       echo "PASS - tutto ok \n";
   }
   else
   {
       echo "FAIL - test fallito \n";
   }

}

?>