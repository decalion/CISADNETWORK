<?php

    include './models/classes/User.php';

    $user = new User($_SESSION['userData']['idusers'], 
                     $_SESSION['userData']['username'], 
                     $_SESSION['userData']['password'], 
                     $_SESSION['userData']['name'], 
                     $_SESSION['userData']['lastname'], 
                     $_SESSION['userData']['email'], 
                     $_SESSION['userData']['imageurl'], 
                     $_SESSION['userData']['idroles'], 
                     $_SESSION['userData']['activemail'], 
                     $_SESSION['userData']['active'], 
                     $_SESSION['userData']['userKey'],
                     $_SESSION['userData']['privacity']);
        
    $user->loadInfo($link);
    
?>
<script src="js/delFriend.js"></script>
<h1>Settings</h1>
<div class='infoDiv'>
    <div class='infoHeaders'>
        <h1><?php echo $user->getUsername(); ?></h1>
        <h4>Name: <?php echo $user->getName(); ?></h4>
        <h4>Lastname: <?php echo $user->getLastname(); ?></h4>
        <h4>Email: <?php echo $user->getEmail(); ?></h4>
        <h4>Friends</h4>
        <ul>
            <?php
                $friends = $user->getFriends();
                foreach ($friends as $friend) {
                    echo '<li id=li'.$friend['idusers'].'><a href="index.php?type=users&id='.$friend['idusers'].'">'.$friend['username'].'</a><input class="delFriend" id='.$friend['idusers'].' type="button" value="X" /></li>';
                }
            ?>
        </ul>
    </div>
    <div class='detailImage'>
        <img src="images/<?php echo $user->getImageurl(); ?>" />
    </div>
</div>