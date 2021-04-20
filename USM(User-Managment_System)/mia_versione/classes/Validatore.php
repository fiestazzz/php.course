<?php

class Validatore
{
    private $user;

    private $controlloNome;
    private $controlloCognome;
    private $controlloEmail;

    private $messaggioNome;
    private $messaggioCognome;
    private $messaggioEmail;

    private $classeBootstrapInputNome;
    private $classeBootstrapFeedbackNome;

    public function __construct(User $user) {
        $this->user=$user;
        $this->validatore();
    }


     /**
     * Get the value of messaggioNome
     */ 
    public function getMessaggioNome()
    {
        return $this->messaggioNome;
    }


    
    /**
     * Get the value of messaggioCognome
     */ 
    public function getMessaggioCognome()
    {
        return $this->messaggioCognome;
    }

    /**
     * Get the value of messaggioEmail
     */ 
    public function getMessaggioEmail()
    {
        return $this->messaggioEmail;
    }

    /**
     * Get the value of controlloEmail
     */ 
    public function getControlloEmail()
    {
        return $this->controlloEmail;
    }

    /**
     * Get the value of controlloCognome
     */ 
    public function getControlloCognome()
    {
        return $this->controlloCognome;
    }

    /**
     * Get the value of controlloNome
     */ 
    public function getControlloNome()
    {
        return $this->controlloNome;
    }






    public function validatore()
    {
        $this->validatoreNome();
        if($this->controlloNome === true)
        {
            $this->messaggioNome ="Nome Corretto";
            $this->classeBootstrapInputNome="is-valid";
            $this->classeBootstrapFeedbackNome="valid-feedback";
        }
        else
        {
            $this->messaggioNome ="Nome Obbligatorio";
            $this->classeBootstrapInputNome="is-invalid";
            $this->classeBootstrapFeedbackNome="invalid-feedback";
        }
        $this->validatoreCognome();
        if($this->controlloCognome === true)
        {
            
        }
    }

    public function validatoreNome()
    {
        if(trim($this->user->getFirstName() !== ""))
        {
            $this->controlloNome=true;
        }
        else
        {
            $this->controlloNome=false;
        }
    }

    public function validatoreCognome()
    {
        if(trim($this->user->getLastName() !== ""))
        {
            $this->controlloCognome=true;
        }
        else
        {
            $this->controlloCognome=false;
        }
    }

    public function validatoreEmail()
    {
        if(trim($this->user->getEmail() !== ""))
        {
           if(filter_var($this->user->getEmail(),FILTER_VALIDATE_EMAIL))
           {
               $this->controlloEmail=true;
           }
        }
        else
        {
            $this->controlloEmail=false;
        }
    }





   


    /**
     * Get the value of classeBootstrapInputNome
     */ 
    public function getClasseBootstrapInputNome()
    {
        return $this->classeBootstrapInputNome;
    }

    /**
     * Get the value of classeBootstrapFeedbackNome
     */ 
    public function getClasseBootstrapFeedbackNome()
    {
        return $this->classeBootstrapFeedbackNome;
    }

    /**
     * Get the value of user
     */ 
    public function getUser()
    {
        return $this->user;
    }
}





?>