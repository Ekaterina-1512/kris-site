<style>
  .hover{
    display: none;
}
.card{
    width:  300px;
    height: 35px;
    border: 2px solid #578f00;
    font-size : 25px;
    background-color: #d4f0a8;
}
</style>
<div class = "history">
      <div>
        <img src= "/photo/IMG_0643.png" alt = "Крисс_Кросс" width="500px">
      </div>
    <div class = "text">
        Привет!Меня зовут Кристина, и я фитнес тренер. 
        <button class= "card">Когда-то я была такой </button>
          <br>
         Я готова стать твоим лучшим другом в борьбе за здоровье и красивое тело.
        Как я это буду делать?<a href="catalog.php">Смотри сюда!</a>
    </div>
      <div class = "big hover">
          <img src = "/photo/IMG_0641.png" alt = "Крисс_Кросс" width="130px"></br>
          <img src = "/photo/IMG_0642.png" alt = "Крисс_Кросс"width="130px">
      </div>
    </div>
  <script>
    let hover = document.querySelector(".card")
    let img = document.querySelector(".big")
    hover.addEventListener("click",function(){
        img.classList.toggle("hover")
    })
  </script>
    
