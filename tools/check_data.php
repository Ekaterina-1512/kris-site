<?php

function resetData($data){
    foreach($data as &$val):
        $val=htmlspecialchars($val);
        $val=str_replace('\'','',$val);
    endforeach;
    return $data;
    };

function checkLogin($email, $password){
    $query = "SELECT cl.name FROM clients cl WHERE email=\"$email\" AND `password`=\"$password\"";
    include "mysql_connect.php";

    $mysql_result = $mysqli->query($query);
    if($mysql_result == false){
        return $mysqli->error;
    } else{
        return $mysql_result;
    }
}
?>