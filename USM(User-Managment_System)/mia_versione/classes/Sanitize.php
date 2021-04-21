<?php
class Sanitize 
{
    private $parola;
    //private $email;

    public function __construct($parola /*, $email*/) {
       $this->parola=$parola;
      // $this->email=$email;
       $this->SanificaParola();
    }



    public function SanificaParola()
    {
        $tuttoMin=strtolower($this->parola);
        $PrimaMaiu=ucfirst($tuttoMin);
    }







    /**
     * Get the value of parola
     */ 
    public function getParola()
    {
        return $this->parola;
    }
}





?>