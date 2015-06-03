<?php

    /**
     * Insert a new user that register on the website and send a mail to her email
     * @return String If sucefully added return a string
     * @return String If failed adding the user return a string
     */

    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    $password = encrypt($password);

    $query = "INSERT INTO users (username, password, name, lastname, email, imageurl, idroles, userKey) VALUES('".$username."', '".$password."', '".$name."', '".$lastname."', '".$email."', 'error.png', 2, '".encrypt($username)."');";
    if ($link->query($query)) {
        echo "Registered user has successfully registered. We have sent an confirmation email.";
        if (isset($_POST['email']))  {
            $subject = 'Welcome '.$username.' to Cisadnetwork!';
            $comment = 'To activate your account, you must active your user visiting http://'.$_SERVER['HTTP_HOST'].'/validate.php?userKey='.encrypt($username).'.';
            mail($email, "$subject", $comment, "From:".$email);
        }
    } else {
        echo $link->getError();
    }
    
?>
