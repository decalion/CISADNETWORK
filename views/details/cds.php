<?php

    include './models/classes/CD.php';

    $object = loadDetail('cds', $link);
    if ($object == null) {
        echo 'CD not found!';
    } else {
        $cd =  new Book($object['idcds'], 
                            $object['idgroups'], 
                            $object['name'], 
                            $object['imageurl']);
        $cd->show();
    }
    
?>