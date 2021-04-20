<?php

class UserValidation
{
    public const FIRST_NAME_ERROR_NONE_MSG = 'Il nome e\' corretto' ;
    public const FIRST_NAME_ERROR_REQUIRED_MSG = 'Il nome e\' obbligatorio' ;

    private $user;
    private $error=[];
    private $isValid=true;


    public  function __construct(User $user) 
    {
        $this->user=$user;
        $this->validate();
    }


    private function validate()
    {

        $result=$this->validateFirstName();
        $this->errors['firstName']=$result;

        if (!$result->getIsValid())
        {
            $this->isValid = false;
        }
    }

    private function validateFirstName()
    {
        $firstName=trim($this->user->getFirstName());
        if (empty($firstName))
        {
            $validationResult= new ValidationResult(self::FIRST_NAME_ERROR_REQUIRED_MSG ,false , $firstName);
        }
        else
        {
            $validationResult= new ValidationResult(self::FIRST_NAME_ERROR_NONE_MSG , true ,$firstName );
        }
        return $validationResult;
    }

    public function getErrors()
    {
        return $this->errors;
    }

    public function getError($errorKey)
    {
        return $this->errors[$errorKey];
    }




}



?>