<?php

    include './models/classes/CD.php';

    $object = loadDetail('cds', $link);
    if ($object == null) {
        echo 'CD not found!';
    } else {
        $cd = new CD($object['idcds'], 
                            $object['idgroups'], 
                            $object['name'], 
                            $object['imageurl']);
        $cd->loadInfo($link);
    }
    
?>
<div class='infoDiv'>
    <div class='infoHeaders'>
        <h1><?php echo $cd->getName(); ?></h1>
        <h4>Group: <a href="<?php echo 'index.php?type=groups&id='.$cd->getGroup('idgroups'); ?>"><?php echo $cd->getGroup('name'); ?></a></h4>
    </div>
    <div class='detailImage'>
        <img src="images/<?php echo $cd->getImageurl(); ?>" />
    </div>
    <div>
        <h2>Songs</h2>
        <p>
            <?php
                $songs = $cd->getSongs();
                foreach ($songs as $song) {
                    echo $song;
                }
            ?>
        </p>
    </div>
</div>