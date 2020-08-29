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
});

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




$(function() {
    $('.signup-pop-btn').click(function(){
        $('.dropdown-men').show();
        $('.signup-container').addClass('signup-animation');
    });
    $('.times-signup').click(function(){
        $('.dropdown-men').hide();
    });
    $('.signup-nav-btn').click(function(){
        $('.dropdown-men').show();
        $('.signup-container').addClass('signup-animation');
    });
});