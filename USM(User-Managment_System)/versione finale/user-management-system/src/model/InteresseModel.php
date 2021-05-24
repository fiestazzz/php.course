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

    

}



?>