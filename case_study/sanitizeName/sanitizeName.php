<?php
function sanitizeName($name)
{
    $skinnyName = preg_replace('/[^a-zA-Z ]+/','',$name);
    $explodeName = explode(" " , $skinnyName);
    $correctNames = array_map('correctCase' , $explodeName);
    return implode(" " , $correctNames);
}

function correctCase($name)
{
    $nameLowCase=strtolower($name);
    $uppercaseName=ucfirst($nameLowCase);
    return $uppercaseName;
}


?>