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
    });
    $(".lets-go").click(function(){

        var name = $("input#name-sub").val();
        if( name == "" ) {
            $("label#name_error-sub").show();
            $("input#name-sub").focus();
            return false;
        }

        var email = $("input#email-sub").val();
        if ( email == "" ) {
            $("label#email_error-sub").show();
            $("input#email-sub").focus();
            return false;
        }
    });
    
});



//////////////////////////////////// LOGIN ////////////////////////////////////




function ajaxgo(){
    
    var data = new FormData();
    data.append("name", document.getElementById("name").value);
    data.append("email", document.getElementById("email").value);

    var xhr = new XMLHttpRequest();
    xhr.open("POST", "bin/clientlogin.php");

    xhr.onload = function(){
        console.log(this.response);
        if(this.response == "OK")
        {
            console.log(this.response);
            $('#contact_form').html("<div id='message'></div>");
            $('#message').html("<h2>Contact Form Submitted!</h2>").append("<p>We will be in touch soon.</p>").hide().fadeIn(1500, function(){
                $('#message').append("<img id='checkmark' src='images/check.png'/>");
            });
            setTimeout(
                function(){
                    location.reload();}
                    , 2000
            );
        }
        else if (this.response != "OK")
        {
            console.log(this.response);
            $('.signup-pop-btn').show();
            $('.signup-pop-btn').addClass('signup-btn-animation');
            $('.cursor').show();
            $('.cursor').addClass('cursor-animation');
        }
    };

    xhr.send(data);

    return false;
}



//////////////////////////////////// SIGNUP ////////////////////////////////////




function signup(){
    
    var data = new FormData();
    data.append("name-sub", document.getElementById("name-sub").value);
    data.append("email-sub", document.getElementById("email-sub").value);

    var xhr = new XMLHttpRequest();
    xhr.open("POST", "bin/clientsignup.php");

    xhr.onload = function(){
        if(this.response == "OK")
        {
            console.log("OK");
        }
        else
        {
            if(this.response == "Only letters and white space allowed" || this.response == "Name is required"){
                $("label#name_error-sub").html(this.response);
                $("label#name_error-sub").show();
                $("input#name-sub").focus();
            }
            else{
                $("label#email_error-sub").html(this.response);
                $("label#email_error-sub").show();
                $("input#email-sub").focus();
            }
        }
        return false;
    };

    xhr.send(data);

    return false;
}




$(function() {
    $('.signup-pop-btn').click(function(){
        $('.dropdown-men').show();
        $('.signup-container').addClass('signup-animation');
    });
    $('.times-signup').click(function(){
        $('.dropdown-men').hide();
        $("label#name_error-sub").hide();
        $("input#name-sub").val("");
        $("label#email_error-sub").hide();
        $("input#email-sub").val("");
    });
    $('.signup-nav-btn').click(function(){
        $('.dropdown-men').show();
        $('.signup-container').addClass('signup-animation');
    });
});



//////////////////////////////////// DISCONNECT ////////////////////////////////////



document.getElementById("disconnect-page").addEventListener("load", location.reload() );

// document.getElementById("disconnect-page").addEventListener("load", 
//     function(){
//         setTimeout(
//             function(){
//                 location.reload();}
//                 , 2000
//         );
//     }
// );

// ("#disconnect-page").onload(function(){
//     console.log("cheh");
    
// });