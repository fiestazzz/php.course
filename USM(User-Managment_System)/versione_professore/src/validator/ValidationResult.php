<?php

class ValidationResult
{
    private $message;
    private $isValid;
    private $value;
    
    public function __construct($message , $isValid , $valore) 
    {
        $this->message=$message;
        $this->isValid=$isValid;
        $this->value=$valore;
        
    }


    /**
     * Get the value of message
     */ 
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Get the value of isValid
     */ 
    public function getIsValid()
    {
        return $this->isValid;
    }

    /**
     * Get the value of value
     */ 
    public function getValue()
    {
        return $this->value;
    }
}



?>