<?php

class Validatore
{
    private $user;

    private $controlloNome;
    private $controlloCognome;
    private $controlloEmail;
    private $controlloDataNascita;

    private $messaggioNome;
    private $messaggioCognome;
    private $messaggioEmail;
    private $messaggioDataNascita;

    private $classeBootstrapInputNome;
    private $classeBootstrapFeedbackNome;

    private $classeBootstrapInputCognome;
    private $classeBootstrapFeedbackCognome;

    private $classeBootstrapInputEmail;
    private $classeBootstrapFeedbackEmail;

    private $classeBootstrapInputData;
    private $classeBootstrapFeedbackData;

    

    

    public function __construct(User $user) {
        $this->user=$user;
        $this->validatore();
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
            $this->messaggioCognome ="Cognome Corretto";
            $this->classeBootstrapInputCognome="is-valid";
            $this->classeBootstrapFeedbackCognome="valid-feedback";
        }
        else
        {
            
            $this->messaggioCognome ="Cognome Obbligatorio";
            $this->classeBootstrapInputCognome="is-invalid";
            $this->classeBootstrapFeedbackCognome="invalid-feedback";
        }

        $this->validatoreEmail();
        if ($this->controlloEmail === true)
        {
            $this->messaggioEmail ="Email Valida";
            $this->classeBootstrapInputEmail="is-valid";
            $this->classeBootstrapFeedbackEmail="valid-feedback";
        }
        else
        {
            
            $this->messaggioEmail ="Email Obbligatoria/Non valida";
            $this->classeBootstrapInputEmail="is-invalid";
            $this->classeBootstrapFeedbackEmail="invalid-feedback";
        }


        $this->validatoreData();
        if($this->controlloDataNascita === true)
        {
            $this->messaggioDataNascita ="Data Valida";
            $this->classeBootstrapInputData="is-valid";
            $this->classeBootstrapFeedbackData="valid-feedback";
        }
        else
        {
            $this->messaggioDataNascita ="Data obbligatoria";
            $this->classeBootstrapInputData="is-invalid";
            $this->classeBootstrapFeedbackData="invalid-feedback";
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


    public function validatoreData()
    {
        if($this->user->getDataNascita() !== "")
        {
            $this->controlloDataNascita = true;
        }
        else
        {
            $this->controlloDataNascita=false;
        }
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

    /**
     * Get the value of classeBootstrapInputCognome
     */ 
    public function getClasseBootstrapInputCognome()
    {
        return $this->classeBootstrapInputCognome;
    }

    /**
     * Get the value of classeBootstrapFeedbackCognome
     */ 
    public function getClasseBootstrapFeedbackCognome()
    {
        return $this->classeBootstrapFeedbackCognome;
    }

    /**
     * Get the value of classeBootstrapInputEmail
     */ 
    public function getClasseBootstrapInputEmail()
    {
        return $this->classeBootstrapInputEmail;
    }

    /**
     * Get the value of classeBootstrapFeedbackEmail
     */ 
    public function getClasseBootstrapFeedbackEmail()
    {
        return $this->classeBootstrapFeedbackEmail;
    }

    /**
     * Get the value of controlloDataNascita
     */ 
    public function getControlloDataNascita()
    {
        return $this->controlloDataNascita;
    }

    /**
     * Get the value of classeBootstrapInputData
     */ 
    public function getClasseBootstrapInputData()
    {
        return $this->classeBootstrapInputData;
    }

    /**
     * Get the value of classeBootstrapFeedbackData
     */ 
    public function getClasseBootstrapFeedbackData()
    {
        return $this->classeBootstrapFeedbackData;
    }

    /**
     * Get the value of messaggioDataNascita
     */ 
    public function getMessaggioDataNascita()
    {
        return $this->messaggioDataNascita;
    }
}





?>