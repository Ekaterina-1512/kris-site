<?php include "./components/shapka.php" ?>

<?php
session_start();
?>

<?php if($_SESSION["logged"]){ ?>

    <div>Добро пожаловать в личный кабинет</div>

<?php } else{  ?>
    <div>Вы вышли</div>
<?php } ?>

<?php include "./components/footer.php" ?>
