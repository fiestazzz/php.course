<?php
class User
{
    private $userId;
    private $firstName;
    private $lastName;
    private $email;
    private $dataNascita;
    
    

    public function __construct($nome , $cognome , $email , $dataNascita) {
        $this->firstName=$nome;
        $this->lastName=$cognome;
        $this->email=$email;
        $this->dataNascita=$dataNascita;
    }




    /**
     * Get the value of firstName
     */ 
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Get the value of lastName
     */ 
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Get the value of dataNascita
     */ 
    public function getDataNascita()
    {
        return $this->dataNascita;
    }

     /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }



   
}






?>