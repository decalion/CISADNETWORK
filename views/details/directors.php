<?php

    include './models/classes/Director.php';

    $object = loadDetail('directors', $link);
    if ($object == null) {
        echo 'Director not found!';
    } else {
        $director = new Director($object['iddirectors'], 
                            $object['name'], 
                            $object['imageurl']);
        $director->loadInfo($link);
    }

?>
<div class='infoDiv'>
    <div class='infoHeaders'>
        <h1><?php echo $director->getName(); ?></h1>
    </div>
    <div class='detailImage'>
        <img src="images/<?php echo $director->getImageurl(); ?>" />
    </div>
    <div>
        <h2>Movies</h2>
        <p>
            <?php
                $movies = $director->getMovies();
                if ($movies != null) {
                    foreach ($movies as $movie) {
                        echo $movie;
                    }
                } else {
                    echo "This director don't have any movies yet!";
                }
            ?>
        </p>
    </div>
    <div>
        <h2>Series</h2>
        <p>
            <?php
                $series = $director->getSeries();
                if ($series != null) {
                    foreach ($series as $serie) {
                        echo $serie;
                    }
                } else {
                    echo "This director don't have any series yet!";
                }
            ?>
        </p>
    </div>
</div>