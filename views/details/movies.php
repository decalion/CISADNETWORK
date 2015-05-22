<?php

    include './models/classes/Movie.php';

    $object = loadDetail('movies', $link);
    if ($object == null) {
        echo 'Movie not found!';
    } else {
        $serie = new Movie($object['idmovies'], 
                            $object['name'], 
                            $object['sinopsi'], 
                            $object['year'], 
                            $object['imageurl'], 
                            $object['average'], 
                            $object['totalvotes']);
        $serie->show();
    }

?>