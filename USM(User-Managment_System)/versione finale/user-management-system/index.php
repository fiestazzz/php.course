<?php

use sarassoroberto\usm\service\UserSession;

(new UserSession())->redirect();
header('location: ./list_users.php');