<?php include "./components/shapka.php" ?>

<?php
session_start();
?>

<div id="login_form">
    <form method="post">
        <input required type="email" placeholder = "@mail" name="email" id="email"><br/>
        <input type="password" name="password" required placeholder="password" id="password">
        <input type="hidden" name="login" value="login">
        <hr>
        <input type="submit" id="login_submit">
        <a href="/register.php">Регистрация</a>
    </form>
</div>

<?php include "./components/footer.php" ?>
