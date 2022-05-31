<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

var_dump($_POST);
require_once("../../../Config/Connection.php");
require_once("../../../Model/User.php");

Connexion::connect();

try{

}catch(Exception $e){
    echo $e->getMessage();
    return;
}


?>