<?php

    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    $password = encrypt($password);

    $query = "INSERT INTO users (username, password, name, lastname, email, imageurl, idroles, userKey) VALUES('".$username."',' ".$password."',' ".$name."',' ".$lastname."',' ".$email . "', '', 2, '".encrypt($username)."');";
    if ($link->query($query)) {
        echo "Registered user has successfully registered. We have sent an confirmation email.";
        if (isset($_POST['email']))  {
            $subject = 'Welcome '.$username.' to Cisadnetwork!';
            $comment = 'To activate your account, you must active your user visiting http://cisadsystems.esy.es/validate.php?userKey='.encrypt($username).'.';
            mail($email, "$subject", $comment, "From:" . $email);
        }
    } else {
        $log['msg'] = $link->getError();
    }
    
?>