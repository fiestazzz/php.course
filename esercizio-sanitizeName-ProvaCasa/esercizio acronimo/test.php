<?php
function acronimo($name)
{
    $nomeCompleto="";
    $tuttoMinuscolo=strtolower($name);
    $arrayEsploso=explode(" ",$tuttoMinuscolo);
      for ($i=0;$i<count($arrayEsploso);$i++)
      {
        $arrayEsploso[$i]=ucfirst($arrayEsploso[$i]);
        $arrayEsploso[$i]=preg_replace('/[[:lower:]]+/','',$arrayEsploso[$i]);
        $nomeCompleto=implode('.',$arrayEsploso).".";
      }
      return $nomeCompleto;
      
      
       
      

      
      

    
    
    
}





?>