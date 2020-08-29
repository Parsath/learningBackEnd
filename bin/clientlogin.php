<?php
    session_start();
    include('../connexion.php');
    
    $req = $bdd->prepare("SELECT name, email FROM clients WHERE name = ? AND email = ? " );
    $req->execute(array($_POST['name'],$_POST['email']));

    $login = $req->fetch();

    // echo $_POST['name'] . '         ' . $_POST['email'];

    if( $login )
        echo 'OK';
    else 
        echo 'Login invalide';


?>