$(document).ready(function(){

    function checkEmail(email){
        if(email.match(new RegExp(/.+@.+\..{2,}/g)) != null){
            return true
        } else {
            return false
        }
    }

    $("#register_submit").on("click", function(e){

        let email = $("#email").val()

        if(!checkEmail(email)){
            alert("Неккоректный email")
        }else{
            $.ajax({
                url: "/io.php",
                type: "POST",
                dataType: "json",
                data: {
                    email: $("#email").val(),
                    name: $("#name").val(),
                    password: $("#password").val(),
                    lastname: $("#lastname").val(),
                    birthday: $("#birthday").val(),
                    weight: $("#weight").val(),
                    growth: $("#growth").val(),
                    activity: $("#activity").val(),
                    illness: $("#illness").val(),
                    gender: $(":checked").val(),
                    action: $("#action").val()
                },
                success: function(data, statusText){
                    console.log(statusText)
                },

                error: function(error){
                    console.log("Error: ", error.msg)
                },

                complete: function(data){
                    console.debug(data)
                    let result = data.responseJSON;
                    if(!result.ok){
                        alert(result.msg)
                    }else{
                        alert(result.msg)
                        location.href = result.url
                    }
                }
            })
        }
        return false
    })
})