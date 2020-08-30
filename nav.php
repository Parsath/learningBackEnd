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
    <title>Navigation</title>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light d-print"> 
        <a class="navbar-brand" href="https://www.facebook.com/bilel.taktak.5/" target="_blank">
            <img class="brand-image" src="images/brand.jpg" alt="my pp"/>
        </a>
        <div class="navbar-nav nav-links">
            <a class="nav-item nav-link ml-5 my-item" href="index.php">Home</a>
            <a class="nav-item nav-link ml-5 my-item" href="#">Second</a>
            <a class="nav-item nav-link ml-5 my-item" href="#">Last</a>
        </div>
        <?php 
            if(!isset($_SESSION['name']))
            {
                ?>
                    <div class="login-signup">
                        <button class="btn btn-dark signup-nav-btn">Signup</button>
                        <a class="btn btn-outline-dark btn-login" href="login.php" role="button">Login</a>
                    </div>
                <?php
            }
            else
            {
                ?>
                    <div class="signedup">
                        <h4 class="text text-dark nickname"><?php echo $_SESSION['name'] ?></h2>
                        <a href="disconnect.php"><button class="btn btn-outline-dark disconnect-btn">Disconnect</button></a>
                    </div>
                <?php
            }

            ?>
    </nav>

    <div class="dropdown-men">
        <button class="btn times-signup "><i class="fa fa-times white" aria-hidden="true"></i></button>
        <div class="signup-container">
            <form class="px-4 py-3 signup-form" id="signup-form" onsubmit="return signup()" action="">
                <div class="form-group">
                    <label for="email-sub">Email address</label>
                    <input type="email" class="form-control" id="email-sub" placeholder="email@example.com">
                    <label class="error" for="email-sub" id="email_error-sub">This field is required.</label>
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                    <label for="name-sub">Name</label>
                    <input type="text" class="form-control" id="name-sub" placeholder="Name">
                    <label class="error" for="name-sub" id="name_error-sub">This field is required.</label>
                </div>
                <button type="submit" class="btn btn-primary lets-go">Let's go!</button>
            </form>
        </div>
    </div>
    
</body>
</html>