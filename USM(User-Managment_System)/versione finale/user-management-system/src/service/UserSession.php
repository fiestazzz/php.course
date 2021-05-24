<?php

namespace sarassoroberto\usm\service ;

use sarassoroberto\usm\model\UserModel;

class UserSession{

    public function __construct(){
        session_start();
    }

    public function authenticate(string $email , string $password){

        $um = new UserModel();
        $user = $um->authenticate($email , $password);

        if (!is_null($user)){
            $_SESSION['user_authenticated'] = $user ; 
            return $user;
        }
        else{
            unset($_SESSION['user_authenticated']);
        }
    }


    function isAuthenticated(){
        
        if(isset($_SESSION['user_authenticated'])){
            return true;
        }
        else{
            
            return false;
        }

    }

    function redirect(){
        if(!$this->isAuthenticated()){
            header("location: /../../login_user.php");
        }
    }


}




?>