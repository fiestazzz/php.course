<?php
require __DIR__.'/classes/User.php';
require __DIR__.'/classes/Validatore.php';

if ($_SERVER['REQUEST_METHOD'] ==='GET')
{
    $firstName="";
    $lastName="";
    $email="";
    $classeInpuNome="";
    $classeFeedbackNome="";
    $messaggioNome="";
    $classeInpuCognome="";
    $classeFeedbackCognome="";
    $messaggioCognome="";

}

if ($_SERVER['REQUEST_METHOD'] ==='POST')
{
    $utente = new User($_POST['firstName'],$_POST['lastName'],$_POST['email'],$_POST['dataNascita']);
    $validazioneUtente = new Validatore($utente);

    $firstName=$validazioneUtente->getUser()->getFirstName();
    $classeInputNome=$validazioneUtente->getClasseBootstrapInputNome();
    $classeFeedbackNome=$validazioneUtente->getClasseBootstrapFeedbackNome();
    $messaggioNome=$validazioneUtente->getMessaggioNome();

    $lastName=$validazioneUtente->getUser()->getLastName();
    $classeInputCognome=$validazioneUtente->getClasseBootstrapInputCognome();
    $classeFeedbackCognome=$validazioneUtente->getClasseBootstrapFeedbackCognome();
    $messaggioCognome=$validazioneUtente->getMessaggioCognome();

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
                <input class="form-control <?=$classeInputNome?>" type="text" name="firstName" value="<?= $firstName?>">
                <div class="<?= $classeFeedbackNome?>"> <?= $messaggioNome ?></div>
                
            </div>
            <div class="form-group">
                <label for="">Cognome</label>
                <input class="form-control <?=$classeInputCognome?>" type="text" name="lastName" value="<?= $lastName?>">
                <div class="<?= $classeFeedbackCognome?>"><?= $messaggioCognome ?></div>
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