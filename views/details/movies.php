<?php

    include './models/classes/Movie.php';

    $factory = new Factory('movies', $link);
    $object = $factory->loadDetail();
    
    if ($object == null) {
        echo 'Movie not found!';
    } else {
        $movie = new Movie($object['idmovies'], 
                           $object['name'], 
                           $object['sinopsi'], 
                           $object['year'], 
                           $object['imageurl'], 
                           $object['average'], 
                           $object['totalvotes']);
        $movie->loadInfo($link);
?>
<div class='infoDiv'>
    <div class='infoHeaders'>
        <h1><?php echo $movie->getName(); ?></h1>
        <h4>Reputation: <?php echo $movie->getAverage(); ?></h4>
        <h4>Total votes: <?php echo $movie->getTotalvotes(); ?></h4>
        <h4>Director: <a href="<?php echo 'index.php?type=directors&id='.$movie->getDirector('iddirectors'); ?>"><?php echo $movie->getDirector('name'); ?></a></h4>
    </div>
    <div class='detailImage'>
        <img src="images/<?php echo $movie->getImageurl(); ?>" />
    </div>
    <div>
        <h2>Sinopsi</h2>
        <p>
            <?php echo $movie->getSinopsi(); ?>
        </p>
    </div>
    <div>
        <h2>Actors</h2>
        <p>
            <?php 
                $actors = $movie->getActors();
                foreach ($actors as $actor) {
                    echo '<p><a href="index.php?type=actors&id='.$actor['idactors'].'">'.$actor['name'].'</a></p>';
                }
            ?>
        </p>
    </div>
    <?php $factory->buildCommentsSection(); ?>
</div>
<?php
    }
?>
