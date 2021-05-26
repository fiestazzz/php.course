<?php
namespace sarassoroberto\usm\model;

use PDO;
use sarassoroberto\usm\config\local\AppConfig;
use sarassoroberto\usm\entity\Interesse;

class InteresseModel{

    private $conn;
    public function __construct(){
        try {
            $this->conn = new PDO('mysql:dbname='.AppConfig::DB_NAME.';host='.AppConfig::DB_HOST, AppConfig::DB_USER, AppConfig::DB_PASSWORD);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        } catch (\PDOException $e) {
            // TODO: togliere echo
            echo $e->getMessage();
        }
    }

    public function readAll(){
        $pdostm = $this->conn->prepare('SELECT * FROM Interesse;');
        $pdostm->execute();
        return $pdostm->fetchAll(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE , Interesse::class,['','']);
    }


    public function createInteresse($nameInteresse){
        try {
            $pdostm = $this->conn->prepare('INSERT INTO Interesse (Name)
            VALUES (:Name);');

            $pdostm->bindValue(':Name', $nameInteresse, PDO::PARAM_STR);
            

            $pdostm->execute();
        } catch (\PDOException $e) {
            // TODO: Evitare echo
            echo $e->getMessage();

        }
    }

    public function deleteInteresse($interesseId){
        try {
            $sql = "delete from Interesse where InteresseId=:user_id ";
        
            $pdostm = $this->conn->prepare($sql);
            $pdostm->bindValue(':user_id',$interesseId,PDO::PARAM_INT);
            $pdostm->execute();
    
            
            if($pdostm->rowCount() === 0) {
                return false;
            } else if($pdostm->rowCount() === 1){
                return true;
            }
        } catch (\PDOException $e) {
            // TODO: Evitare echo
            echo $e->getMessage();

        }
    }

    

}



?>