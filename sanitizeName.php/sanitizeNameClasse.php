<?php
function sanitizeName($name)
{
    
    $skinnyName = preg_replace('/[^a-z .A-Z]+/','',$name);
    $explodeName = explode(" " , $skinnyName);
    $correctNames = array_map('correctCase' , $explodeName);
    $unisciStringhe= implode(" " , $correctNames);
    return trim($unisciStringhe);
    
}

function correctCase($name)
{
    $nameLowCase=strtolower($name);
    $uppercaseName=ucfirst($nameLowCase);
    return $uppercaseName;
}


?>