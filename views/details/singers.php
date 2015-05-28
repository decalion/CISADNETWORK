<?php

    include './models/classes/Singer.php';
    
    $factory = new Factory('singers', $link);
    $object = $factory->loadDetail($_GET['id']);

    if ($object == null) {
        echo 'Singer not found!';
    } else {
        $singer = new Singer($object['idsingers'], 
                            $object['name'], 
                            $object['imageurl']);
        $singer->loadInfo($link);
    }
    
?>
<div class='infoDiv'>
    <div class='infoHeaders'>
        <h1><?php echo $singer->getName(); ?></h1>
    </div>
    <div class='detailImage'>
        <img src="images/<?php echo $singer->getImageurl(); ?>" />
    </div>
    <div>
        <h2>Groups</h2>
        <p>
            <?php
                $groups = $singer->getGroups();
                foreach ($groups as $group) {
                    echo $group;
                }
            ?>
        </p>
    </div>
    <?php $factory->buildCommentsSection(); ?>
</div>