<?php
namespace sarassoroberto\usm\model;

use PDO;
use sarassoroberto\usm\config\local\AppConfig;

class UserInteresseModel{
    private $userId;
    private $interesseId;
    private $conn;

    public function __construct($userId , $interesseId)
    {
        $this->userId = $userId;
        $this->interesseId = $interesseId;
    }


    public function associateUserToHobbies(){
        try {
            $this->conn = new PDO('mysql:dbname='.AppConfig::DB_NAME.';host='.AppConfig::DB_HOST, AppConfig::DB_USER, AppConfig::DB_PASSWORD);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            $pdostm = $this->conn->prepare('INSERT INTO user_interesse (UserId,InteresseId)
            VALUES (:UserId,:InteresseId);');
            $pdostm->bindValue(':UserId', $this->getUserId(), PDO::PARAM_INT);
            $pdostm->bindValue(':InteresseId', $this->getInteresseId(), PDO::PARAM_INT);
    
             $pdostm->execute();
        } catch (\PDOException $e) {
            // TODO: togliere echo
            echo "codice di errore".$e->getCode();
        }

       


    }
    

    /**
     * Get the value of userId
     */ 
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set the value of userId
     *
     * @return  self
     */ 
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get the value of interesseId
     */ 
    public function getInteresseId()
    {
        return $this->interesseId;
    }

    /**
     * Set the value of interesseId
     *
     * @return  self
     */ 
    public function setInteresseId($interesseId)
    {
        $this->interesseId = $interesseId;

        return $this;
    }
}





?>