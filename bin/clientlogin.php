<?php
    session_start();
    include('../connexion.php');
    
    $req = $bdd->prepare("SELECT name, email FROM clients WHERE name = ? AND email = ? " );
    $req->execute(array($_POST['name'],$_POST['email']));

    $login = $req->fetch();

    if( $login )
    {
        echo 'OK';
        $_SESSION['name'] = $_POST['name'];
        $_SESSION['email'] = $_POST['email'];
    }
    else 
        echo 'Login invalide';


?>