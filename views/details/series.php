<?php

    include './models/classes/Serie.php';

    $object = loadDetail('series', $link);
    if ($object == null) {
        echo 'Serie not found!';
    } else {
        $serie = new Serie($object['idseries'], 
                            $object['name'], 
                            $object['sinopsi'], 
                            $object['year'], 
                            $object['imageurl'],
                            $object['seasons'],
                            $object['totalchapters'],
                            $object['average'], 
                            $object['totalvotes']);
        $serie->show();
    }
    
?>