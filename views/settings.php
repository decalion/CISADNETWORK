<?php

    include './models/classes/User.php';

    $user = new User($_SESSION['userData']['idusers'], 
                     $_SESSION['userData']['username'], 
                     $_SESSION['userData']['name'], 
                     $_SESSION['userData']['lastname'], 
                     $_SESSION['userData']['email'], 
                     $_SESSION['userData']['imageurl'], 
                     $_SESSION['userData']['idroles'], 
                     1, 
                     1, 
                     $_SESSION['userData']['userKey'],
                     $_SESSION['userData']['privacity']);

    $user->loadInfo($link);
?>
    <script src="js/delFriend.js"></script>
    <div class='infoDiv'>
        <div class='infoHeaders'>
            <h1><?php echo $user->getUsername(); ?></h1>
<?php
    if ($_POST['state'] == 0) {
?>
            <form action="./index.php" method="post">
                <input hidden type="text" name="type" value="settings" />
                <input hidden type="text" name="state" value="1" />
                <input type="submit" value="Modify profile" />
            </form>
            <h4>Name: <?php echo $user->getName(); ?></h4>
            <h4>Lastname: <?php echo $user->getLastname(); ?></h4>
            <h4>Email: <?php echo $user->getEmail(); ?></h4>
            <h4>Friends</h4>
            <?php
                $friends = $user->getFriends();
                if (count($friends) < 1) {
                    echo "You don't have any friend!";
                } else {
                    echo '<ul>';
                    foreach ($friends as $friend) {
                        echo '<li id=li'.$friend['idusers'].'><a href="index.php?type=users&id='.$friend['idusers'].'">'.$friend['username'].'</a><input class="bFriend" id='.$friend['idusers'].' type="button" value="X" /></li>';
                    }
                    echo '</ul>';
                }
            ?>
        </div>
        <div class='detailImage'>
            <img src="images/<?php echo $user->getImageurl(); ?>" />
        </div>
    </div>
<?php
    } else if ($_POST['state'] == 1) {
?>
        <form action="./index.php" method="post">
            <input hidden type="text" name="type" value="settings" />
            <input hidden type="text" name="state" value="0" />
            <input type="submit" value="Back" />
        </form>
        <form action="./index.php" method="post">
            <input hidden type="text" name="type" value="settings" />
            <input hidden type="text" name="state" value="2" />
            <input type="submit" value="Save" />
                <h4>Name: <input type="text" name="username" value="<?php echo $user->getName(); ?>" /></h4>
                <h4>Lastname: <input type="text" name="lastname" value="<?php echo $user->getLastname(); ?>" /></h4>
                <h4>Email: <input type="text" name="email" value="<?php echo $user->getEmail(); ?>" /></h4>
                <h4>Password: <input type="text" name="password" /></h4>
                <h4>Repeat password: <input type="text" name="cPassword" /></h4>
            <h4>Change avatar</h4>
            <input type="file" name="avatar" value="Avatar" />
            </div>
            <div class='detailImage'>
                <img src="images/<?php echo $user->getImageurl(); ?>" />
            </div>
        </form>
    </div>
<?php
    }
?>
