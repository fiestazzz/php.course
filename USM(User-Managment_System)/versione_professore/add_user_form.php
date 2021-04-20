<?php
require __DIR__.'/vendor/testTools/testTool.php';
require __DIR__.'/src/entity/User.php';
require __DIR__.'/src/validator/UserValidation.php';
require __DIR__.'/src/validator/ValidationResult.php';


if ($_SERVER['REQUEST_METHOD'] ==='GET')
{
    $firstName="";
    $lastName="";
    $email="";
    $valido="";
    $message="";
    
}


if ($_SERVER['REQUEST_METHOD'] ==='POST')
{
    $user = new User($_POST['firstName'],$_POST['lastName'],$_POST['email'],$_POST['dataNascita']);
    $userValidation= new UserValidation($user);
    $firstNameValidation  = $userValidation->getError('firstName');
    $Nomevalido=$firstNameValidation->getIsValid() ? "is-valid":"is-invalid";
    $messagevalido=$firstNameValidation->getMessage() ? "valid-feedback": "invalid-feedback";
    $valido=$firstNameValidation->getIsValid();
    $message=$firstNameValidation->getMessage();

    $firstName = $user->getFirstName();
    


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
                <input class="form-control <?=$Nomevalido ?>" type="text" name="firstName" value= "<?= $firstName ?>">
                <div class="<?= $messagevalido ?>"><?= $message ?></div>
                
            </div>
            <div class="form-group">
                <label for="">Cognome</label>
                <input class="form-control" type="text" name="lastName">
                <div class="invalid-feedback">Cognome obbligatorio</div>
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