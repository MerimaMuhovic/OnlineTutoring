<?php 
require_once dirname(__FILE__)."/dao/UserDao.class.php";

$userDao= new UserDao();

$user= $userDao->getUserByEmail("merima.muhovic@hotmail.com");

print_r($user);


?>