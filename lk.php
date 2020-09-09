<?php 

session_start();
include "./tools/check_data.php";

$data = resetData($_POST);

if(isset($data["login"]) and $data["login"] == "login"){
   $login_result = checkLogin($data["email"], $data["password"]);
   if($login_result){
       $row = $login_result->fetch_assoc();
       if($row != NULL){
           $_SESSION["logged"] = true;
           $_SESSION["name"] = $row["name"];
       } else{
           $_SESSION["logged"] = false;
       }
   }
}

?>

<?php include "./components/shapka.php"; ?>

<?php
    if(!$_SESSION["logged"]){
        include "./components/login.php";
    } else{
        print("Добро пожаловать!");
    }
?>

<?php include "./components/footer.php"; ?>