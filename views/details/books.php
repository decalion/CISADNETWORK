<?php

    include './models/classes/Book.php';

    $object = loadDetail('books', $link);
    if ($object == null) {
        echo 'Book not found!';
    } else {
        $book = new Book($object['idbooks'], 
                            $object['name'], 
                            $object['sinopsi'], 
                            $object['year'], 
                            $object['imageurl'],
                            $object['isbn'],
                            $object['average'], 
                            $object['totalvotes']);
        $book->show();
    }
    
?>