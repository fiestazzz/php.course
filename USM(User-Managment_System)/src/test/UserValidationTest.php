<?php
require __DIR__.'/../../vendor/testTools/testTool.php';
require __DIR__.'/../entity/User.php';
require __DIR__.'/../validator/UserValidation.php';
require __DIR__.'/../validator/ValidationResult.php';


$user= new User('Mario' , 'Draghi' , 'mg@ddr.it' , '1992-01-01');
$val = new UserValidation($user);
$firstNameValidation = $val->getError('firstName');
assertEquals(true ,$firstNameValidation->getIsValid());
assertEquals(UserValidation::FIRST_NAME_ERROR_NONE_MSG, $firstNameValidation->getMessage());


$user2 = new User('' , 'Draghi' , 'mg@ddr.it' , '1992-01-01');
$val = new UserValidation($user2);
$firstNameValidation = $val->getError('firstName');
assertEquals(false, $firstNameValidation->getIsValid());
assertEquals(UserValidation::FIRST_NAME_ERROR_REQUIRED_MSG, $firstNameValidation->getMessage());


$user3 = new User('   ' , 'Draghi' , 'mg@ddr.it' , '1992-01-01');
$val = new UserValidation($user3);
$firstNameValidation = $val->getError('firstName');
assertEquals(false, $firstNameValidation->getIsValid());
assertEquals(UserValidation::FIRST_NAME_ERROR_REQUIRED_MSG, $firstNameValidation->getMessage());

$user4 = new User(null , 'Draghi' , 'mg@ddr.it' , '1992-01-01');
$val = new UserValidation($user4);
$firstNameValidation = $val->getError('firstName');
assertEquals(false, $firstNameValidation->getIsValid());
assertEquals(UserValidation::FIRST_NAME_ERROR_REQUIRED_MSG, $firstNameValidation->getMessage());

?>