<?php

    include './models/classes/News.php';

    $query = 'select * from news order by date desc limit 5;';
    $result = $link->query($query);
    if ($result->num_rows == 0) {
        unset($result);
    }

    if (isset($result)) {
        foreach ($result as $object) {
            $news[] = new News($object['idnews'],
                            $object['idusers'], 
                            $object['name'],
                            $object['imageurl'],
                            $object['description'],
                            $object['date'],
                            $object['average'],
                            $object['totalvotes']);
        }
    } else {
        echo 'We have currently no news to show!';
    }
    foreach ($news as $new) {
?>
        <div class='newRow'>
            <img src="images/<?php echo $new->getImageurl(); ?>"/>
            <a href="index.php?type=news&id=<?php echo $new->getIdnews() ?>"><?php echo $new->getName(); ?></a>
            <p><?php echo $new->getDate(); ?></p>
            <p class='limitP'><?php echo $new->getDescription(); ?></p>
        </div>
<?php
    }
?>