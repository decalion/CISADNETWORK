<?php

    include './models/classes/Group.php';
    include './models/classes/CD.php';
    include './models/classes/Song.php';

    $factory = new Factory('groups', $link);
    $object = $factory->loadDetail();
    
    if ($object == null) {
        echo 'Group not found!';
    } else {
        $group = new Group($object['idgroups'], 
                            $object['name'], 
                            $object['year'], 
                            $object['imageurl'],
                            $object['average'], 
                            $object['totalvotes']);
        $group->loadInfo($link);
    }
    
?>
<div class='infoDiv'>
    <div class='infoHeaders'>
        <h1><?php echo $group->getName(); ?></h1>
    </div>
    <div class='detailImage'>
        <img src="images/<?php echo $group->getImageurl(); ?>" />
    </div>
    <div>
        <h2>Cds</h2>
        <p>
            <?php
                $cds = $group->getCds();
                foreach ($cds as $cd) {
                    echo $cd;
                }
            ?>
        </p>
    </div>
    <div>
        <h2>Components</h2>
        <p>
            <?php
                $singers = $group->getSingers();
                foreach ($singers as $singer) {
                    echo $singer;
                }
            ?>
        </p>
    </div>
    <?php $factory->buildCommentsSection(); ?>
</div>