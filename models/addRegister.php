<?php

    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    $password = encrypt($password);

    $query = "INSERT INTO users (username, password, name, lastname, email, avatarurl, idrole) VALUES('".$username."',' ".$password."',' ".$name."',' ".$lastname."',' ".$email . "', '', 2) ;";
    if ($link->query($query)) {
        $log['msg'] = "Registered user has successfully registered.";
    } else {
        $log['msg'] = $link->getError();
    }
    
?>