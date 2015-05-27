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
        $book->loadInfo($link);
    }
    
?>
<div class='infoDiv'>
    <div class='infoHeaders'>
        <h1><?php echo $book->getName(); ?></h1>
        <h4>Reputation: <?php echo $book->getAverage(); ?></h4>
        <h4>Total votes: <?php echo $book->getTotalvotes(); ?></h4>
    </div>
    <div class='detailImage'>
        <img src="images/<?php echo $book->getImageurl(); ?>" />
    </div>
    <div>
        <h2>Sinopsi</h2>
        <p>
            <?php echo $book->getSinopsi(); ?>
        </p>
    </div>
    <div>
        <h2>Author</h2>
        <p>
            <?php 
                $authors = $book->getAuthors();
                foreach ($authors as $author) {
                    echo $author;
                }
            ?>
        </p>
    </div>
</div>