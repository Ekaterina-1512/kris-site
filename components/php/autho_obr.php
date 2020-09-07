<?php
  session_start();
  $mail = $_POST["mail"];
  $password = $_POST["password"];
  include "db.php";
  $q = "SELECT * FROM Klients WHERE BINARY mail='$mail' AND BINARY password='$password'";
  $responce = $sql->query($q);
  if($responce == false){
    header('Location: http://b91533lo.beget.tech/sql/form_auto.php');//специальная функция 
    $message = "Не удалось отправить запрос";
    $_SESSION['error'] = $message;
    exit($message);
  }
  $Klients = $responce->fetch_assoc();
  if($Klients == null){
      header('Location: http://b91533lo.beget.tech/sql/form_auto.php');
      $message = "Логин или пароль неверный";
    $_SESSION['error'] = $message;
  } else {
     header('Location: http://b91533lo.beget.tech/sql/index.php');
    $message = "Добро пожаловать".", ".$Klients['name']." ".$Klients['lastname']."!";
    $_SESSION['Klients'] = $Klients;
  }
  print $message;
?>