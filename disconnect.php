<?php
    session_start();
    include('connexion.php');
    session_destroy();
    if(!isset($_SESSION['name']))
        header("Location: index.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body id="disconnect-page">
    <header>
        <?php include('nav.php') ?>
    </header>

    <h1 class="disconnect-confirm">You have been disconnected Succesfully!.<br/>You are now being redirected.</h1>

    <?php include('footer.php') ?>
    
</body>
</html>