<?php 
require_once dirname(__FILE__)."/dao/UserDao.class.php";

$userDao= new UserDao();

$user= $userDao->getUserByID(2);

//$userDao->getUserByEmail("merima.muhovic@hotmail.com");

print_r($user);


?>