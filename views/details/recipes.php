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
        $recipe->show();
    }

?>