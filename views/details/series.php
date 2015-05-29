<?php

    include './models/classes/Serie.php';

    $factory = new Factory('series', $link);
    $object = $factory->loadDetail();
    
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
        $serie->loadInfo($link);
?>
<div class='infoDiv'>
    <div class='infoHeaders'>
        <h1><?php echo $serie->getName(); ?></h1>
        <h4>Reputation: <?php echo $serie->getAverage(); ?></h4>
        <h4>Total votes: <?php echo $serie->getTotalvotes(); ?></h4>
        <h4>Director: <a href="<?php echo 'index.php?type=directors&id='.$serie->getDirector('iddirectors'); ?>"><?php echo $serie->getDirector('name'); ?></a></h4>
    </div>
    <div class='detailImage'>
        <img src="images/<?php echo $serie->getImageurl(); ?>" />
    </div>
    <div>
        <h2>Sinopsi</h2>
        <p>
            <?php echo $serie->getSinopsi(); ?>
        </p>
    </div>
    <div>
        <h2>Actors</h2>
        <p>
            <?php
                $actors = $serie->getActors();
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