<?php
use sarassoroberto\usm\service\UserSession;

require "./__autoload.php";


$userSession = new UserSession();
$userSession->logOut();
$userSession->redirect();


?>