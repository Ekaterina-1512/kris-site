<?php

$mysql_user = "root";
$mysq_password = "admin";
$mysql_host = "mysql";
$mysql_database = "kris_database";

$mysqli = new mysqli($mysql_host, $mysql_user, $mysq_password, $mysql_database);
if($mysqli->connect_error){
    die("MySQL Error" . $mysqli->connect_error);
}
?>
