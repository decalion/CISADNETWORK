<?php

    include './models/classes/Author.php';

    $factory = new Factory('authors', $link);
    $object = $factory->loadDetail();
    
    if ($object == null) {
        echo 'Author not found!';
    } else {
        $author = new Author($object['idauthors'],
                            $object['name'],
                            $object['imageurl']);
        $author->loadInfo($link);
    }

?>
<div class='infoDiv'>
    <div class='infoHeaders'>
        <h1><?php echo $author->getName(); ?></h1>
    </div>
    <div class='detailImage'>
        <img src="images/<?php echo $author->getImageurl(); ?>" />
    </div>
    <div>
        <h2>Books</h2>
        <p>
            <?php 
                $books = $author->getBooks();
                foreach ($books as $book) {
                    echo $book;
                }
            ?>
        </p>
    </div>
    <?php $factory->buildCommentsSection(); ?>
</div>