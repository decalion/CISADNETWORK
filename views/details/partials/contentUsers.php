<div class='infoDiv'>
    <div class='infoHeaders'>
        <?php
        
        ?>
        <h1><?php echo $user->getUsername(); ?></h1>
        <h4><?php echo $user->getName(); ?></h4>
        <h4><?php echo $user->getLastname(); ?></h4>
        <h4><?php echo $user->getEmail(); ?></h4>
    </div>
    <div class='detailImage'>
        <img src="images/<?php echo $user->getImageurl(); ?>" />
    </div>
    
</div>