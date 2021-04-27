<?php

use salvatorebotta\usm\entity\User;

spl_autoload_register(function($className)
{
   
    require __DIR__."/../$className.php";
});

$user= new User('Toto' , 'Botta' , 'agb@gm.it' , '2020-01-01');

print_r($user);






?>