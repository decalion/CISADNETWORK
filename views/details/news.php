<?php

    include './models/classes/News.php';

    $query = 'select * from news where idnews = '.$_GET['id'].';';
    $result = $link->query($query);
    if ($result->num_rows == 0) {
        unset($result);
    } else {
        foreach ($result as $new) {
            $new = new News($new['idnews'], 
                            $new['idusers'], 
                            $new['name'],
                            $new['imageurl'],
                            $new['description'],
                            $new['date'],
                            $new['average'],
                            $new['totalvotes']);
        }
    }
    
?>
<div class='infoDiv'>
    <div class='infoHeaders'>
        <h1><?php echo $new->getName(); ?></h1>
        <h4>Reputation: <?php echo $new->getAverage(); ?></h4>
        <h4>Total votes: <?php echo $new->getTotalvotes(); ?></h4>
        <h4>User: <a href="<?php echo 'index.php?type=users&id='.$new->getIdusers(); ?>"><?php echo $new->getUsersName($link); ?></a></h4>
    </div>
    <div class='detailImage'>
        <img src="images/<?php echo $new->getImageurl(); ?>" />
    </div>
    <div>
        <p>
            <?php echo $new->getDescription(); ?>
        </p>
    </div>
</div>