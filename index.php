<?php  
require_once 'vendor/autoload.php'; 
require_once 'app/Core/core.php'; 

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);  
$dotenv->load();  

require_once 'Connection.php';  

handleCors();


require_once 'app/Routes/route.php';