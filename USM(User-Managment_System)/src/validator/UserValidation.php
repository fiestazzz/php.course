<?php

class UserValidation
{
    private $user;
    private $error=[];
    private $isValid=true;

    public  function __construct(User $user) 
    {
        $this->user=$user;
    }


    public function validate()
    {

        $result=$this->validateFirstName();
        $this->errors['firstName']=$result;
    }

    public function validateFirstName()
    {
        $firstName=trim($this->user->getFirstName());
        if (empty($firstName))
        {
            $validationResult= new ValidationResult("Il nome è incorretto" ,false);
        }
        else
        {
            $validationResult= new ValidationResult("Il nome è corretto" , true ,$firstName );
        }
        return $validationResult;
    }






}



?>