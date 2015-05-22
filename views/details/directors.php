<?php

    include './models/classes/Director.php';

    $object = loadDetail('directors', $link);
    if ($object == null) {
        echo 'Director not found!';
    } else {
        $director = new Director($object['iddirectors'], 
                            $object['name'], 
                            $object['imageurl']);
        $director->show();
    }

?>