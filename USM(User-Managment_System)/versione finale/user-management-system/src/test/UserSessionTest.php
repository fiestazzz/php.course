<?php

use sarassoroberto\usm\service\UserSession;

require __DIR__."/../../__autoload.php";
require __DIR__."/../../vendor/testTools/testTool.php";


 $us = new UserSession();

 $user = $us->authenticate('luigi.russo@email.com' , 'a123');


 print_r($_SESSION['user_authenticated']);

 //assertEquals($_SESSION['user_authenticated'] , $user);

?>