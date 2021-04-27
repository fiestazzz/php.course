<?php
namespace salvatorebotta\usm\validator;

use salvatorebotta\usm\entity\User;



class UserValidation
{
    public const FIRST_NAME_ERROR_NONE_MSG = 'Il nome e\' corretto' ;
    public const FIRST_NAME_ERROR_REQUIRED_MSG = 'Il nome e\' obbligatorio' ;

    public const LAST_NAME_ERROR_NONE_MSG = 'Il cognome e\' corretto' ;
    public const LAST_NAME_ERROR_REQUIRED_MSG = 'Il cognome e\' obbligatorio' ;

    public const EMAIL_ERROR_NONE_MSG = 'L\'email e\' corretta' ;
    public const EMAIL_ERROR_REQUIRED_MSG = 'L\'email e\' obbligatoria' ;
    public const EMAIL_ERROR_INVALID = 'L\'email e\' invalida';

    private $user;
    private $errors=[];
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
        
        $result = $this->validateLastName();
        $this->errors['lastName']=$result;
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
            $validationResult= new ValidationResult(self::FIRST_NAME_ERROR_REQUIRED_MSG , false , $firstName);
        }
        else
        {
            $validationResult= new ValidationResult(self::FIRST_NAME_ERROR_NONE_MSG , true ,$firstName );
        }
        return $validationResult;
    }

    private function validateLastName()
    {
        $lastName=trim($this->user->getLastName());
        if (empty($lastName))
        {
            $validationResult= new ValidationResult(self::LAST_NAME_ERROR_REQUIRED_MSG , false , $lastName);
        }
        else
        {
            $validationResult= new ValidationResult(self::LAST_NAME_ERROR_NONE_MSG , true ,$lastName );
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


    public function getIsValid(){
        $this->isValid = true;
        foreach ($this->errors as $validationResult) {
            $this->isValid = $this->isValid && $validationResult->getIsValid();
        }
        return $this->isValid;
    }


}



?>