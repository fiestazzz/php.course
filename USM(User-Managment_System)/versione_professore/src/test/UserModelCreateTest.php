<?php
ini_set('display_errors', true);
error_reporting(E_ALL);

require __DIR__.'/../entity/User.php';
require __DIR__.'/../model/UserModel.php';


$model=new UserModel();
$user=new User('Vincenzo' , 'Giggio' , 'vg@email.com' , '1756-02-02');
$model->create($user);