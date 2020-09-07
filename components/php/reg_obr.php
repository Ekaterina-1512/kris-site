<?php
session_start();
$name = $_POST['name'];
$lastname = $_POST['lastname'];
$patronymic = $_POST['patronymic'];
$birthday = $_POST['birthday'];
$gender = $_POST['gender'];
$weight = $_POST['weight'];
$growth = $_POST['growth'];
$activity = $_POST['activity'];
$llness= $_POST['llness'];
$mail = $_POST['mail'];
$password = $_POST['password'];
$user = file_get_contents("php://input");
$user = json_decode($user);
include "db.php"; 

$queryString = "INSERT INTO `user`(`name`, `lastname`,'patronymic', `birthday`, `gender`, `email`, `login`, `password`) VALUES ('$name', '$lastname', '$birthday', '$gender', '$email', '$login', '$password')";

$responce = $sql->query($queryString);

if($responce){
  header('Location: http://b91533lo.beget.tech/sql/form_auto.php' );
  $message = "Регистрация прошла успешно!";
    
} else {
  header('Location: http://b91533lo.beget.tech/sql/form_reg.php' );
  $message = "Ошибка!Возможно такой пользователь уже есть!";
}
$_SESSION['error'] = $message; 
print $message;

?>
