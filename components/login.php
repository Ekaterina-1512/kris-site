<div class="tabs">
    <input type="radio" name="tab-btn" id="tab-btn-1" value="" <?php print $login_form; ?>>
    <label for="tab-btn-1">Вход</label>
    <input type="radio" name="tab-btn" id="tab-btn-2" value="" <?php print $reg_from; ?>>
    <label for="tab-btn-2">Регистрация</label>

    <div id="login_form">
        <form action="lk.php" method="post">
            <input required type="email" placeholder = "@mail" name="email"><br/>
            <input type="password" name="password" required placeholder="password">
            <input type="hidden" name="login" value="login">
            <hr>
            <input type="submit">
        </form>
    </div>
    
    
    <div id="registration_form">
    <form action="lk.php" method = "POST">
        <input type="hidden" name="login" value="reg">
        <input required type="text" placeholder = "Имя" name="name">
        <input required type="text" placeholder = "Фамилия" name="lastname">
        <input type="text" placeholder = "Отчество (если есть)" name="patronymic">
        <input required type="date" name="birthday">
        <div>
            <label for="men">Муж</label>
            <input type="radio" id="men" name="gender" value="Муж">
            <label for="women">Жен</label>
            <input type="radio" id="women" name="gender" value="Жен">
        </div>
        <input type="number" placeholder = "Ваш текущий вес" name="weight"> 
        <input type="number" placeholder = "Ваш рост" name="growth">
        <p>Выберите число от 1 до 5 взависимости от вашей активности<br>
        (1-большая часть времени сижу, 5-постоянная активность)</p></span>
        <input class ="range-style" list="tickmarks" type = "range"  min="1" max="5" step="1" name="activity" value = "1">
        <datalist id="tickmarks">
            <option value="1">
            <option value="2">
            <option value="3">
            <option value="4">
            <option value="5">
        </datalist>

        <p>Опишите ваше самочувствие на данный момент времени,есть ли каки-либо заболевания</p>
        <textarea name = "illness" wrap></textarea>
        <input required type="email" placeholder = "@mail" name="email">
        <input required type="password" placeholder = "пароль" name="password">
        <br>
        <input type="submit" value="Зарегистрироваться">
    </form>  
    </div>

  </div>