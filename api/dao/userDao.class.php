<?php 
require_once dirname(__FILE__)."/BaseDao.class.php";

class UserDao extends BaseDao{

    public function getUserByEmail($email){
        
       return $this->queryUnique("SELECT * FROM users WHERE email=:email", ["email"=>$email]);

    }

    public function getUserByID($id){

        return $this->queryUnique("SELECT * FROM users WHERE id= :id",["id"=>$id]);

    }

}

?>