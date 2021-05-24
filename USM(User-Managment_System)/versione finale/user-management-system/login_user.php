<?php
use sarassoroberto\usm\entity\User;
use sarassoroberto\usm\model\UserModel;
use sarassoroberto\usm\service\UserSession;
use sarassoroberto\usm\validator\bootstrap\ValidationFormHelper;
use sarassoroberto\usm\validator\UserValidation;

require "./__autoload.php";

$action = './login_user.php';
$submit = 'LOGIN';

if($_SERVER['REQUEST_METHOD']==='GET'){
    
    /** Il form viene compilato "vuoto" */
    list($email,$emailClass,$emailClassMessage,$emailMessage) = ValidationFormHelper::getDefault();
    list($password, $passwordClass, $passwordClassMessage, $passwordMessage) = ValidationFormHelper::getDefault();
    $message = "";   
}

if ($_SERVER['REQUEST_METHOD']==='POST') {
    $email=$_POST['email']; 
    $password = $_POST['password'];
    
    $userSession = new UserSession();
    if($userSession->authenticate($email , $password)){
    header('location: ./list_users.php');
    }
    else{
        $message  = "Invalid email or password";
        $emailClass=$passwordClass="is-invalid";
    }
           
    }
    

include 'src/view/login_user_view.php';
?>