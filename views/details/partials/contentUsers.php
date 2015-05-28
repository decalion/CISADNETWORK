<div class='infoDiv'>
    <div class='infoHeaders'>
        <h1><?php echo $user->getUsername(); ?></h1>
        <h4>Name: <?php echo $user->getName(); ?></h4>
        <h4>Lastname: <?php echo $user->getLastname(); ?></h4>
        <h4>Email: <?php echo $user->getEmail(); ?></h4>
    </div>
    <div class='detailImage'>
        <img src="images/<?php echo $user->getImageurl(); ?>" />
    </div>
</div>