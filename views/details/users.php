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
                 $object['userKey'],
                 $object['privacity']);
        
        $user->loadInfo($link);

        if (strcmp($_GET['id'], $_SESSION['userData']['idusers']) == 0) {
            include './views/details/partials/contentUsers.php';
        } else {
            switch ($user->getPrivacity()) {
                case 'private':
                    echo "This profile is private.";
                    break;
                case 'friends':
                    if($user->isFriend($link, $_SESSION['userData']['idusers'])) {
                        include './views/details/partials/contentUsers.php';
                    } else{
                        echo "This profile is private.";
                    }
                    break;
                case 'public':
                    include './views/details/partials/contentUsers.php';
                    break;
                default:
                    echo "This profile is private.";
                    break;
            }
        }
    }

?>