$(document).ready(function(){

    function checkEmail(email){
        if(email.match(new RegExp(/.+@.+\..{2,}/g)) != null){
            return true
        } else {
            return false
        }
    }

    $("#login_submit").on("click", function(e){

        let email = $("#email").val()
        let password = $("#password").val()

        if(!checkEmail(email)){
            alert("Неккоректный email")
        }else{
            $.ajax({
                url: "/io.php",
                data: { action: "login", email: email, password: password},
                type: "POST",
                dataType: "json",
                success: function(data, statusText, jqXHR){
                    console.log(statusText)
                },
                error: function(error){
                    console.log(error)
                },
                complete: function(data){
                    console.log(data)
                    let result = data.responseJSON
                    if(result.ok && result.url){
                        location.href = result.url
                    } else{
                        alert(result.msg)
                    }
                }
            })
        }
        return false
    })
})