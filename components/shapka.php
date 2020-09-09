<?php
  session_start();
?>
<!doctype html>
<html lang="ru">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php print $title; ?></title>
    <link rel="stylesheet" href="/css/style_shapka.css">
    <link rel="stylesheet" href="/css/pages.css" type="text/css">
    <link rel="stylesheet" href="/css/login.css">
   
  </head>
  <body>
    <header>
      
    <h1>Тело мечты!</h1> 
    
    <div class = "menu">
      <button class = "menu-button" id="main_button">Главная</button>
      <button class = "menu-button" id="aboutme_button">Обо мне</button>
      <button class = "menu-button" id="catalog_button">Каталог упражнений</button>
      <button class = "menu-button" id="contacts_button">Контакты</button>
      <?php
        if($_SESSION['logged'] != true){
      ?>
      <button class = "menu-button" id="lk_button">Личный кабинет</button>
      
      <?php
        } else{ ?>
        <?php print($_SESSION["name"]); ?>
        <button class = "menu-button" id="logout_button">Выход</button>
        <?php }?>
    </div>
    <img class = "img_sport" src = "https://odintsovo.biz/img/catalog/yellow/odincovo-sport.jpg" >
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js" width="10px"
    height="10px"></script>
      <script src = "/js/shapka.js"></script>
    </header>
    