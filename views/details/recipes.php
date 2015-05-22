<?php

    include './models/classes/Recipe.php';

    $object = loadDetail('recipes', $link);
    if ($object == null) {
        echo 'Recipe not found!';
    } else {
        $recipe = new Recipe($object['idrecipes'], 
                            $object['name'], 
                            $object['imageurl'], 
                            $object['description'], 
                            $object['average'], 
                            $object['totalvotes']);
?>
<div class='infoDiv'>
    <div class='infoHeaders'>
        <h1><?php echo $recipe->getName(); ?></h1>
        <h4>Reputation: <?php echo $recipe->getAverage(); ?></h4>
        <h4>Total votes: <?php echo $recipe->getTotalvotes(); ?></h4>
    </div>
    <div class='detailImage'>
        <img src="images/<?php echo $recipe->getImageurl(); ?>" />
    </div>
    <div>
        <h2>Sinopsi</h2>
        <p>
            <?php echo $recipe->getDescription(); ?>
        </p>
    </div>
</div>
<?php
    }
?>