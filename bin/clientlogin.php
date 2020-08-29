<?php
    session_start();
    include('../connexion.php');
    $req = $bdd->prepare("SELECT name, email FROM clients WHERE name = ? AND email = ? " );
    $req->execute(array($_POST['name'],$_POST['email']));

    $login = $req->fetch();

    if( $login )
        echo 'OK';
    else 
        echo 'Baguette';
   
   
   
   
   
   
   
   
   
   
    // $req = $bdd->query("SELECT * FROM clients" );

    // while( $login = $req->fetch() ){
    //     if( $login['name'] == $_POST['name'] && $login['email'] == $_POST['email'] )
    //         echo 'OK';
    //     else
    //         echo 'Baguette';
    //     echo '                  ' . $login['name'] . ' ' . $login['email'];
    //     echo '                  ' . $_POST['name'] . ' ' . $_POST['email'];
    // }


?>