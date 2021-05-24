<?php

use sarassoroberto\usm\entity\Interesse;
use sarassoroberto\usm\model\InteresseModel;

include './../../__autoload.php';

$interesse = new InteresseModel();

$interesseLeggi = $interesse->readAll();

print_r($interesseLeggi);





?>