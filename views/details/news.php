<?php

    include './models/classes/News.php';

    $object = loadDetail('news', $link);
    if ($object == null) {
        echo 'Item not found!';
    } else {
        $news = new News($object['idnews'], 
                            $object['idusers'], 
                            $object['name'],
                            $object['imageurl'],
                            $object['description'],
                            $object['date'],
                            $object['average'],
                            $object['totalvotes']);
        $news->show();
    }

?>