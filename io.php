<?php
session_start();
include "./tools/check_data.php";

$data = resetData($_POST);

if($data["action"] == "login"){
    $login_result = checkLogin($data["email"], $data["password"]);
    if($login_result){
        $row = $login_result->fetch_assoc();
        if($row != NULL){
            $_SESSION["logged"] = true;
            $_SESSION["name"] = $row["name"];
            echo "{\"ok\": true, \"url\":\"cabinet.php\", \"msg\": \"Success\"}";
        } else{
            $_SESSION["logged"] = false;
            echo "{\"ok\": false, \"msg\": \"не правильный email или пароль\"}";
        }
    }
} else if($data["action"] == "register"){
    $reg_result = checkEmail($data["email"]);
    if($reg_result){
        echo "{\"ok\": false, \"msg\": \"такой email уже есть\"}";
    } else{
        include "./tools/mysql_connect.php";
        $query_clients = "INSERT INTO clients (`name`,`lastname`,`date`,`gender`,`growth`,`illness`,`email`,`password`) VALUES(?,?,?,?,?,?,?,?)";
        
        $stmt = $mysqli->prepare($query_clients);
        $stmt->bind_param('sssiisss', 
            $data["name"],
            $data["lastname"],
            $data["birthday"],
            $data["gender"],
            $data["growth"],
            $data["activity"],
            $data["email"],
            $data["password"]
        );

        $stmt->execute();

        // $reg_result = $mysqli->query($query_clients);
        if(!$stmt->error){
            echo "{\"ok\": true, \"code\": \"rows affected: $stmt->affected_rows\", \"msg\": \"Успех\", \"url\":\"/login.php\"}";
        } else{
            echo "{\"ok\": false, \"msg\": \"$stmt->error\"}";
        }
        $stmt->close();
    }
    
}else{
    $action = $data["action"];
    echo "{\"ok\": false, \"msg\": \"Unknown action\" }";
}

?>