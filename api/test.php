<?php 
require_once dirname(__FILE__)."/dao/UserDao.class.php";

$userDao= new UserDao();

//$user= $userDao->getUserByID(1);

//$userDao->getUserByEmail("merima.muhovic@hotmail.com");

$user=[

"name" => "Alma",
"surname" => "Spahic",
"email" => "alma@hotmail.com",
"password" => "1234",
"account_id" => 5

];
$userDao->addUser($user);

print_r($user);


?>