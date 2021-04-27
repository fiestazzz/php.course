<?php

use salvatorebotta\usm\entity\User;

spl_autoload_register(function($className)
{
    $classPath = str_replace("salvatorebotta\usm" , __DIR__."\src" , $className);
    $classPath = str_replace("\\" , DIRECTORY_SEPARATOR , $classPath.".php");

    require $classPath;
    
});

?>