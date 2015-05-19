<?php

    include './models/classes/Actor.php';

    $object = loadDetail('actors', $link);
    if ($object == null) {
        echo 'Actor not found!';
    } else {
        $actor = new Book($object['idactors'], 
                            $object['name'], 
                            $object['imageurl']);
        $actor->show();
    }
    
?>