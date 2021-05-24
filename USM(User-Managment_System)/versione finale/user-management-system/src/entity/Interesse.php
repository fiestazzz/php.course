<?php
namespace sarassoroberto\usm\entity;

class Interesse{

    private $InteresseId ; 
    private $Name;

public function __construct($id , $interesseName){

    $this->InteresseId = $id ; 
    $this->Name = $interesseName;
}














    /**
     * Get the value of InteresseId
     */ 
    public function getInteresseId()
    {
        return $this->InteresseId;
    }

    /**
     * Set the value of InteresseId
     *
     * @return  self
     */ 
    public function setInteresseId($InteresseId)
    {
        $this->InteresseId = $InteresseId;

        return $this;
    }

    /**
     * Get the value of Name
     */ 
    public function getName()
    {
        return $this->Name;
    }

    /**
     * Set the value of Name
     *
     * @return  self
     */ 
    public function setName($Name)
    {
        $this->Name = $Name;

        return $this;
    }
}






?>