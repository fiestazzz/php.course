<?php

function sanitizeName($name)
{
    $noScript = preg_replace('#<script(.*?)>(.*?)</script>#is', '', $name);
    $noHtmlTags=strip_tags($noScript);
    $noNumbers=preg_replace('/\d/','',$noHtmlTags);
    $noSpace=trim(preg_replace('/\s\s+/', ' ', str_replace("\n", " ", $noNumbers)));
    $nomeSeparato=explode(" ",$noSpace);
    $noSimbols=preg_replace('/[^a-z. A-z]/','',$nomeSeparato);
    $nomiMaiuscoli=array_map('ResettaNome',$noSimbols);
    $nomiRiuniti=implode(" ",$nomiMaiuscoli);
    return $nomiRiuniti;
}


function ResettaNome($name)
 {
     $minuscolo=strtolower($name);
     return ucfirst($minuscolo);
 }



?>