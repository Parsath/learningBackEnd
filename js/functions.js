$(function (){
    $(".button").click(function(){

        var name = $("input#name").val();
        if( name == "" ) {
            $("label#name_error").show();
            $("input#name").focus();
            return false;
        }

        var email = $("input#email").val();
        if ( email == "" ) {
            $("label#email_error").show();
            $("input#email").focus();
            return false;
        }

        // var dataString = 'name=' + name + '&email=' + email
        // $.ajax({
        //     type: "POST",
        //     url: "bin/process.php",
        //     data: dataString,
        //     success: function(){
        //         $('#contact_form').html("<div id='message'></div>");
        //         $('#message').html("<h2>Contact Form Submitted!</h2>").append("<p>We will be in touch soon.</p>").hide().fadeIn(1500, function(){
        //             $('#message'.append("<img id='checkmark' src='images/check.png'/>"));
        //         });
        //     }
        // });
    });
});

function ajaxgo(){
    
    var data = new FormData();
    data.append("name", document.getElementById("name").value);
    data.append("email", document.getElementById("email").value);

    var xhr = new XMLHttpRequest();
    xhr.open("POST", "bin/clientlogin.php");

    xhr.onload = function(){
        if(this.response == "OK")
        {
            console.log(this.response);
            $('#contact').html("<div id='message'></div>");
            $('#message').html("<h2>Contact Form Submitted!</h2>").append("<p>We will be in touch soon.</p>").hide().fadeIn(1500, function(){
                $('#message').append("<img id='checkmark' src='images/check.png'/>");
            });
        }
        else
            console.log(this.response);
        // else if(this)
        // console.log(this.response);
    };

    xhr.send(data);

    return false;
}