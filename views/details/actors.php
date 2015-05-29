<?php

    include './models/classes/Actor.php';

    $factory = new Factory('actors', $link);
    $object = $factory->loadDetail();
    
    if ($object == null) {
        echo 'Actor not found!';
    } else {
        $actor = new Actor($object['idactors'], 
                            $object['name'], 
                            $object['imageurl']);
        $actor->loadInfo($link);
    }
    
?>
<div class='infoDiv'>
    <div class='infoHeaders'>
        <h1><?php echo $actor->getName(); ?></h1>
    </div>
    <div class='detailImage'>
        <img src="images/<?php echo $actor->getImageurl(); ?>" />
    </div>
    <div>
        <h2>Movies</h2>
        <p>
            <?php
                $movies = $actor->getMovies();
                if ($movies != null) {
                    foreach ($movies as $movie) {
                        echo $movie;
                    }
                } else {
                    echo "This actor don't have any movies yet!";
                }
            ?>
        </p>
    </div>
    <div>
        <h2>Series</h2>
        <p>
            <?php
                $series = $actor->getSeries();
                if ($series != null) {
                    foreach ($series as $serie) {
                        echo $serie;
                    }
                } else {
                    echo "This actor don't have any series yet!";
                }
            ?>
        </p>
    </div>
    <?php $factory->buildCommentsSection(); ?>
</div>