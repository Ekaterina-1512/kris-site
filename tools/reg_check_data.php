<?php

function checkReg($name, $lastname, $patronymic, $birthday, $gender, $weight, $growth,
 $activity, $illness, $email, $password){
    $query = "INSERT INTO clients (`name`, `lastname`, `patronymic`, `birthday`, `gender`, `weight`, `growth`,
    `activity`, `illness`, `email`, `password`) values('$name', '$lastname', '$patronymic', '$birthday', '$gender', '$weight', '$growth',
 '$activity', '$illness', '$email', '$password') ";

    $user_id = "SELECT cl.user_id FROM clients cl ORDER BY `user_id` DESC LIMIT 1";

 $query = "INSERT INTO user_weight (`user_id`,`date`,`weight`) values('$user_id','NOW()','$weight') ";
    include "mysql_connect.php";

    $mysql_result = $mysqli->query($query);
    if($mysql_result == false){
        return $mysqli->error;
    } else{
        return $mysql_result;
    }
}
?> 