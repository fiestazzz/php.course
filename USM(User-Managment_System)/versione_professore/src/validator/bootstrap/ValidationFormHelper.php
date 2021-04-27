<?php
namespace salvatorebotta\usm\validator\bootstrap;

use salvatorebotta\usm\validator\ValidationResult;

class ValidationFormHelper
{

    public static function getValidationClass(ValidationResult $validationResult)
    {
        $value = $validationResult->getValue();
        $formControlClass=$validationResult->getIsValid() ? "is-valid":"is-invalid";
        $classMessage=$validationResult->getIsValid() ? "valid-feedback": "invalid-feedback";
        $message = $validationResult->getMessage();

        return [$value , $formControlClass , $classMessage , $message];
       
    }

    public static function getDefaultValue($defaultValue='')
    {
        $value=$defaultValue;
        $formControlClass="";
        $classMessage="";
        $message="";

        return [$value ,$formControlClass , $classMessage , $message ];
    }








}






?>