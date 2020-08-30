<?php

function test_input($data)
{
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}

function emailValidation($clientEmail)
{
    $email = "";

    if (empty($clientEmail)) {
      $email = "Email is required";
      return $email;
    } 
    else {
        $email = test_input($clientEmail);
        // check if e-mail address is well-formed
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $email = "Invalid email format";
            return $email;
        }
    }
    return $email;
}

function nameValidation($clientName)
{
    $name = "";

    
    if (empty($clientName)) {
        $name = "Name is required";
        return $name;
    } 
    else {
        $name = test_input($clientName);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
            $name = "Only letters and white space allowed";
            return $name;
        }
    }
    return $name;
}


?>