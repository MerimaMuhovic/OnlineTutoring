<?php 

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once dirname(__FILE__)."/dao/UserDao.class.php";

$user_dao= new UserDao();

/*$user=$user_dao->getUserByEmail("merima.muhovic@hotmail.com");
$user=$user_dao->getUser_by_id(1);
*/

$user1=[

    "name"=> "Amina",
    "surname"=>"Muhovic",
    "email"=>"amin@hotmai.com",
    "password"=>"123",
    "active"=>1

];

$user= $user_dao->addUser($user1);
print_r($user);

?>