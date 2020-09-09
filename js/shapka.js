$(document).ready(function(){
  
//Добавляем слушателя на кнопки
  $('#main_button').click(function(e){
    location.href = "/"
  })

  $('#aboutme_button').click(function(e){
    location.href = "/me.php"
  })

  $('#catalog_button').click(function(e){
    location.href = "/catalog.php"
  })

  $('#contacts_button').click(function(e){
    location.href = "/contact.php"
  })

  $('#lk_button').click(function(e){
    location.href = "/login.php"
  })

  $('#logout_button').click(function(e){
    location.href = "/logout.php"
  })

})
      
