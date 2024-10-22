<?php  
require_once 'vendor/autoload.php'; 
require_once 'app/Core/core.php'; 

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);  
$dotenv->load();  

require_once 'Connection.php';  

// Chamada da função para lidar com CORS
handleCors();

require_once 'app/Routes/route.php';