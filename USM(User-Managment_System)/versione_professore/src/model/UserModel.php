<?php
class UserModel
{
    private $conn;
    

    public function __construct()
    {
        
        try 
        {
            $this->conn= new PDO('mysql:dbname=corso_formarete;host=localhost' ,'root' , '');
            $this->conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
            $this->conn->setAttribute( PDO::ATTR_EMULATE_PREPARES, FALSE );


        } catch (\PDOException $e) 
        {
            //To do : cercare di togliere l'echo per visualizzare il messaggio direttamente all'utente
            echo $e->getMessage();
        }
       
    }


    //CRUD(create) || public function add(){}
    public function create(User $user)
    {
        try {
            
            $pdoStm = $this->conn->prepare('Insert into User(firstName , lastName , email , dataNascita)
                                            values(:firstName,:lastName,:email,:dataNascita);');
            $pdoStm->bindValue(':firstName' , $user->getFirstName() , PDO::PARAM_STR);
            $pdoStm->bindValue(':lastName' , $user->getLastName() , PDO::PARAM_STR);
            $pdoStm->bindValue(':email' , $user->getEmail() , PDO::PARAM_STR);  
            $pdoStm->bindValue(':dataNascita' , $user->getDataNascita() , PDO::PARAM_STR); 

            $pdoStm->execute();

        } catch (\PDOException $e) {

            echo $e->getMessage();
        }
                      
    }


    public function read()
    {
        
    }


    public function update()
    {

    }


    public function delete()
    {

    }

}