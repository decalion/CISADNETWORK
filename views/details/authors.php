<?php

    include './models/classes/Author.php';

    $object = loadDetail('authors', $link);
    if ($object == null) {
        echo 'Author not found!';
    } else {
        $author = new Book($object['idauthors'], 
                            $object['name'], 
                            $object['imageurl']);
        $author->show();
    }

?>