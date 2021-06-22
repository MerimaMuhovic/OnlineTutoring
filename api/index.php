<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require dirname(__FILE__).'/../vendor/autoload.php';

//require_once dirname(__FILE__)."/dao/BaseDao.class.php";

//$merima =new BaseDao();  //will call constructor from baseDao
Flight::route('/', function(){
    echo 'hello world!';
});

Flight::route('/helloo', function(){  /// ne radi ???
    echo 'hello world 2!';
});

Flight::start();


?>