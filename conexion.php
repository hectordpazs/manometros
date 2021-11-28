<?php


$db_user = "id18026112_hector";
$db_password = "Carmen#99*..01";
$db_host = "localhost";
$db_name = "id18026112_pozos";

$connection= mysqli_connect($db_host, $db_user, $db_password,$db_name);

if(mysqli_errno($connection)){
    "error al encontrar la bdd";
    exit();
}

mysqli_select_db($connection,$db_name) or die ("no se encontro la base de datos");


?>