<?php

    include './models/classes/Serie.php';

    $object = loadDetail('movies', $link);
    if ($object == null) {
        echo 'Serie not found!';
    } else {
        $serie =  new Serie($object['idmovies'], 
                            $object['name'], 
                            $object['sinopsi'], 
                            $object['year'], 
                            $object['imageurl'], 
                            $object['average'], 
                            $object['totalvotes']);
        $serie->show();
    }
    
?>

        private $idseries;
        private $name;
        private $sinopsi;
        private $year;
        private $imageurl;
        private $season;
        private $totalChapters;
        private $average;
        private $totalvotes;