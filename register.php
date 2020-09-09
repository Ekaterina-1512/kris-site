<?php include "./components/shapka.php" ?>

<?php
session_start();
?>

<div id="registration_form">
    <form method = "POST">
        <input type="hidden" name="action" value="register" id="action">
        <input required type="text" placeholder = "Имя" name="name" id="name">
        <input required type="text" placeholder = "Фамилия" name="lastname" id="lastname">
        <input required type="date" name="birthday" id="birthday">
        <div>
            <label for="men">Муж</label>
            <input type="radio" id="men" name="gender" value="0">
            <label for="women">Жен</label>
            <input type="radio" id="women" name="gender" value="1">
        </div>
        <input type="number" placeholder = "Ваш текущий вес" name="weight" id="weight"> 
        <input type="number" placeholder = "Ваш рост" name="growth" id="growth">
        <p>Выберите число от 1 до 5 взависимости от вашей активности<br>
        (1-большая часть времени сижу, 5-постоянная активность)</p></span>
        <input class ="range-style" list="tickmarks" type = "range"  min="1" max="5" step="1" name="activity" value = "1" id="activity">
        <datalist id="tickmarks">
            <option value="1">
            <option value="2">
            <option value="3">
            <option value="4">
            <option value="5">
        </datalist>

        <p>Опишите ваше самочувствие на данный момент времени,есть ли каки-либо заболевания</p>
        <textarea name = "illness" wrap id="illness"></textarea>
        <input required type="email" placeholder = "@mail" name="email" id="email">
        <input required type="password" placeholder = "пароль" name="password" id="password">
        <br>
        <input type="submit" value="Зарегистрироваться" id="register_submit">
    </form>  
</div>

<?php include "./components/footer.php" ?>