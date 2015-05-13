<?php

    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    $encrypt = encrypt($password);

    $query = "INSERT INTO user (username,password,name,lastname,email,avatarurl,idrole) "
            . "VALUES('" . $username . "','". $encrypt . "','" . $name . "','" . $lastname . "','" . $email . "','',1) ;";

    if ($link->query($query)) {
        $log['msg'] = "Registered user has successfully registered";
    } else {
        $log['msg'] = "Error when registering";
    }
    
?>