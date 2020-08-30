<?php
    session_start();
    include('connexion.php');
    if(isset($_SESSION['name']))
        header("Location: index.php");
        
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="style/style.css" rel="stylesheet" media="all" type="text/css">
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="js/functions.js" type="text/javascript"></script>
    <title>Login</title>
</head>

<body>

    <?php include('nav.php');?>

    <div class="container contact_form" id="contact_form">
        <h1 class="text-dark login-title">Login</h1>
        <form name="contact" id="contact" onsubmit="return ajaxgo()" action="">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
                    <label class="error" for="email" id="email_error">This field is required.</label>
                </div>

                <div class="form-group col-md-6">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Your nickname/name">
                    <label class="error" for="name" id="name_error">This field is required.</label>
                </div>

                <div class="form-check ml-1">
                    <input type="checkbox" class="form-check-input" id="dropdownCheck">
                    <label class="form-check-label " for="dropdownCheck">
                        Remember me
                    </label>
                </div>

            </div>
            <div class="row justify-content-center"> 
                <button type="submit" id="login_submit" class="btn btn-primary button" value="Send">Submit</button>
            </div>
        </form>
    </div>

    <!-- Popup menu for signing up Here -->

    <div class="dropdown">
        <button id="dLabel" class="btn btn-outline-dark signup-pop-btn">Sign Up!</button>
        <img class="cursor" src="images/cursor.png"/>
    </div>
    
    <!-- <div class="dropdown-men">
        <button class="btn times-signup "><i class="fa fa-times white" aria-hidden="true"></i></button>
        <div class="signup-container">
            <form class="px-4 py-3 signup-form">
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" id="email" placeholder="email@example.com">
                </div>
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Name">
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="dropdownCheck">
                    <label class="form-check-label" for="dropdownCheck">
                        Remember me
                    </label>
                </div>
                <button type="submit" class="btn btn-primary lets-go">Let's go!</button>
            </form>
        </div>
    </div> -->

    

    <!-- Dropdown menu for signing up Here -->

    <!-- <div class="dropdown">
        <button id="dLabel" class="btn btn-outline-dark signup-pop-btn" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Sign Up!</button>
        <div class="dropdown-menu">
            <form class="px-4 py-3">
                <div class="form-group">
                <label for="exampleDropdownFormEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleDropdownFormEmail1" placeholder="email@example.com">
                </div>
                <div class="form-group">
                <label for="exampleDropdownFormPassword1">Password</label>
                <input type="password" class="form-control" id="exampleDropdownFormPassword1" placeholder="Password">
                </div>
                <div class="form-check">
                <input type="checkbox" class="form-check-input" id="dropdownCheck">
                <label class="form-check-label" for="dropdownCheck">
                    Remember me
                </label>
                </div>
                <button type="submit" class="btn btn-primary">Sign in</button>
            </form>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">New around here? Sign up</a>
            <a class="dropdown-item" href="#">Forgot password?</a>
        </div>
    </div> -->

    <?php include('footer.php');?>

</body>
</html>