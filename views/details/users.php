<?php

    include './models/classes/User.php';

    $object = loadDetail('users', $link);
    if ($object == null) {
        echo 'User not found!';
    } else {
        $user = new User($object['idusers'], 
                 $object['username'], 
                 $object['password'], 
                 $object['name'], 
                 $object['lastname'], 
                 $object['email'], 
                 $object['imageurl'], 
                 $object['idroles'], 
                 $object['activemail'], 
                 $object['active'], 
                 $object['userKey']);
        $user->show();
    }

?>