<?php 
require_once dirname(__FILE__)."/BaseDao.class.php";

class UserDao extends BaseDao{

    public function getUserByEmail($email){
        
       return $this->queryUnique("SELECT * FROM users WHERE email=:email", ["email"=>$email]);

    }

    public function getUserByID($id){

        return $this->queryUnique("SELECT * FROM users WHERE id= :id",["id"=>$id]);

    }

    public function addUser($user){

        $sql = "INSERT INTO users (name, surname, email, password,account_id) VALUES (:name, :surname, :email, :password, :account_id)";
        $stmt = $this->connection-> prepare($sql);
        $stmt->execute($user);

    }
    public function updateUser($id, $user){

    }

}

?>