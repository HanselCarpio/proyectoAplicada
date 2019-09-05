<?php 
    require 'libs/Config.php';
    $config= Config::singleton();
    $config->set('controllerFolder','controller/');
    $config->set('modelFolder', 'model/');
    $config->set('viewFolder', 'public/');
    
    $config->set('dbhost', '163.178.107.130');
    $config->set('dbname', 'PROYECTO2');
    $config->set('dbuser', 'laboratorios');
    $config->set('dbpass', 'UCRSA.118');

//local
//  require 'libs/Config.php';
//    $config= Config::singleton();
//    $config->set('controllerFolder','controller/');
//    $config->set('modelFolder', 'model/');
//    $config->set('viewFolder', 'public/');
//    
//    $config->set('dbhost', '127.0.0.1');
//    $config->set('dbname', 'PROYECTO2');
//    $config->set('dbuser', 'root');
//    $config->set('dbpass', '');
?>

