<?php
    session_start();
    include('connexion.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Congrats!</title>
</head>
<body>
    <header>
        <?php include('nav.php') ?>
    </header>

    <div class="container-signup">
        <h1 class="text text-dark signup-confirm">You have been Signed UP Succesfully!.<br/>Welcome to our community  <?php echo $_SESSION['name']; ?>.</h1>
        <button class="btn btn-outline-dark home-signup" id="home-signup">Home</button>
    </div>

    <?php include('footer.php') ?>
    
</body>
</html>