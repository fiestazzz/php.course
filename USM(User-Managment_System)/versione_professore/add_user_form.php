<?php

use salvatorebotta\usm\entity\User;
use salvatorebotta\usm\validator\bootstrap\ValidationFormHelper;
use salvatorebotta\usm\validator\UserValidation;

require __DIR__.'/vendor/testTools/testTool.php';
require __DIR__.'/src/entity/User.php';
require __DIR__.'/src/validator/UserValidation.php';
require __DIR__.'/src/validator/ValidationResult.php';
require __DIR__.'/src/validator/bootstrap/ValidationFormHelper.php';


if ($_SERVER['REQUEST_METHOD'] ==='GET')
{
    list($valueNome , $formControlClassNome , $classMessageNome , $messageNome)=ValidationFormHelper::getDefaultValue();
    list($valueCognome, $formControlClassCognome , $classMessageCognome , $messageCognome)=ValidationFormHelper::getDefaultValue();

    
    
}


if ($_SERVER['REQUEST_METHOD'] ==='POST')
{
    $user = new User($_POST['firstName'],$_POST['lastName'],$_POST['email'],$_POST['dataNascita']);
    $userValidation= new UserValidation($user);
    $firstNameValidation = $userValidation->getError('firstName');
    $lastNameValidation=$userValidation->getError('lastName');

    list($valueNome , $formControlClassNome , $classMessageNome , $messageNome)=ValidationFormHelper::getValidationClass($firstNameValidation);
    list($valueCognome, $formControlClassCognome , $classMessageCognome , $messageCognome)=ValidationFormHelper::getValidationClass($lastNameValidation);
    list($valueNEmail , $formControlClassEmail , $classMessageEmail , $messageEmail)=ValidationFormHelper::getValidationClass($firstNameValidation);
   //list($valueNome , $formControlClassNome , $classMessageNome , $messageNome)=ValidationFormHelper::getValidationClass($firstNameValidation);

    

    
    


}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form-add-user</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

</head>
<body>
    <header class="">
        USM(User-Managment-System)
    </header>
    <div class="container">
        <form action="add_user_form.php" method="POST">
            <div class="form-group">
                <label for="">Nome</label>
                 <!--is-invalid-->
                <input class="form-control <?=$formControlClassNome ?>" type="text" name="firstName" value= "<?= $valueNome ?>">
                <div class="<?= $classMessageNome ?>"><?= $messageNome ?></div>
                
            </div>
            <div class="form-group">
                <label for="">Cognome</label>
                <input class="form-control <?=$formControlClassCognome ?>" type="text" name="lastName"  value="<?= $valueCognome ?>">
                <div class="<?= $classMessageCognome ?>"><?= $messageCognome ?></div>
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input class="form-control" type="text" name="email">
                <div class="invalid-feedback">Email obbligatoria</div>
            </div>
            <div class="form-group">
                <label for="">Data Nascita</label>
                <input class="form-control" type="date" name="dataNascita">
                <div class="invalid-feedback">Data obbligatoria</div>
            </div>

            <button class="btn btn-primary mt-3" type="submit">Aggiungi</button>
        </form>
    </div>
</body>
</html>