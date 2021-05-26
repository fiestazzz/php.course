<?php
 include './__autoload.php';

use sarassoroberto\usm\model\InteresseModel;

$submit = 'Crea';
 $action = './new_user_interesse_form.php';


if($_SERVER['REQUEST_METHOD']==='GET'){
    
    $interesseClass= "";  
}

if ($_SERVER['REQUEST_METHOD']==='POST') {
    $nameInteresse = $_POST["nameInteresse"];
    $interesse = new InteresseModel();
    $newInteresse = $interesse->createInteresse($nameInteresse);
    header('location: ./add_user_form.php');
    }

include './src/view/create_new_interesse_view.php' ; 
?>