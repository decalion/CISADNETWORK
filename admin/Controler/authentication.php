<?php

$check = false;
if (($_POST['user'] == NULL) || ($_POST['pass'] == NULL)) {


    $message = "Username or Password can't be null";
    $_POST['ids'] = 0;

    include './index.php';
} else {

    $list = $facade->selectCredencials();
    $name = $_POST['user'];
    $pass = $_POST['pass'];

    foreach ($list as $user) {

        if (($user->getUsername() == $name) && ($user->getPass() == $pass) && ($user->getIdrol() == 1)) {

            $check = true;
            
            $_SESSION['user']=$name;
            break;
        }
    }

    if ($check) {
        include './views/startadminpanel.php';
        
    } else {
        $message = "Username or Password are incorrect";
        $_POST['ids'] = 0;
        include './index.php';
    }
}
?>