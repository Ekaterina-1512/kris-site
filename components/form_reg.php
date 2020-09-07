<div class="form-reg container">
  <meta charset ="UTF-8">
  <link rel="stylesheet" href="/css/form.css">
  <form action="php/reg_obr.php" method = "POST">
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

    <p>Опешите ваше самочувствие на данный момент времени,есть ли каки-либо заболевания</p>
    <textarea name = "illness" wrap></textarea>
    <input required type="email" placeholder = "@mail" name="email">
    <input required type="password" placeholder = "пароль" name="password">
    <br>
    <input type="submit" value="Зарегистрироваться">
    </form>
   <script src="js/form_reg.js"></script>
</div>
   