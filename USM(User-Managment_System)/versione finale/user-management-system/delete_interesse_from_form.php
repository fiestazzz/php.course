<?php

use sarassoroberto\usm\model\InteresseModel;

include './__autoload.php';


$submit = "Elimina";
$action = "./delete_interesse_from_form.php";

$Interessi = new InteresseModel();
$listInteressi = $Interessi->readAll();


if ($_SERVER['REQUEST_METHOD']==='GET') {
    $visibility = "hidden";
    $messaggio = "";



}
if ($_SERVER['REQUEST_METHOD']==='POST') {
    $idInteresse = $_POST["idInteresse"];
    $interesse = new InteresseModel();
    $deleteInteresse = $interesse->deleteInteresse($idInteresse);
    if($deleteInteresse){
        header('location: ./add_user_form.php');
    }
    else{
        $visibility = "visible";
        $messaggio = "Interesse non eliminato";
    }
   
    }

include './src/view/delete_user_interesse_from_form_view.php' ; 
?>