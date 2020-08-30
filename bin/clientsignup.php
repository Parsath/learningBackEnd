<?php
    session_start();
    include('../connexion.php');
    include('signupValidation.php');

    $emailVerification = emailValidation($_POST['email-sub']);
    $nameVerification = nameValidation($_POST['name-sub']);

    // $req = $bdd->prepare("SELECT name, email FROM clients WHERE name = ? AND email = ? " );
    // $req->execute(array($_POST['name'],$_POST['email']));

    // $login = $req->fetch();

    // echo $_POST['name'] . '         ' . $_POST['email'];



    if($emailVerification==$_POST['email-sub'] && $nameVerification==$_POST['name-sub'])
    {
        $req = $bdd->prepare('INSERT INTO clients(name, email) VALUES(:name, :email)');
        $req->execute(array(
            'name' => $nameVerification,
            'email' => $emailVerification
        ));
        $_SESSION['name'] = $nameVerification;
        $_SESSION['email'] = $emailVerification;
        echo "OK";
    }
    else if( $emailVerification != $_POST['email-sub'])
        echo $emailVerification;
    else if( $nameVerification != $_POST['name-sub'])
        echo $nameVerification;




?>