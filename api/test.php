<?php 
require_once dirname(__FILE__)."/dao/UserDao.class.php";

$userDao= new UserDao();

//$user= $userDao->getUserByID(2);

//$userDao->getUserByEmail("merima.muhovic@hotmail.com");

$user=[

"name" => "Alma",
"surname" => "Spahic",
"email" => "alma@hotmail.com",
"password" => "0000",
"account_id" => 3

];
$userDao->addUser($user);

print_r($user);


?>