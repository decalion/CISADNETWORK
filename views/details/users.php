<?php
include './models/classes/User.php';

$object = loadDetail('users', $link);

if ($object == null) {
    echo 'User not found!';
} else {
    $user = new User($object['idusers'], $object['username'], $object['name'], $object['lastname'], $object['email'], $object['imageurl'], $object['idroles'], $object['activemail'], $object['active'], $object['userKey'], $object['privacity']);

    $user->loadInfo($link);

    if (strcmp($_GET['id'], $_SESSION['userData']['idusers']) != 0) {
        switch ($user->getPrivacity()) {
            case 'private':
                echo "<p>The profile of ".$user->getUsername()." is private.</p>";
                break;
            case 'friends':
                if ($user->isFriend($link, $_SESSION['userData']['idusers'])) {
                    include './views/details/partials/contentUsers.php';
                } else {
                    echo "<p>The profile of ".$user->getUsername()." is private.</p>";
                }
                break;
            case 'public':
                include './views/details/partials/contentUsers.php';
                break;
            default:
                echo "<p>The profile of ".$user->getUsername()." is private.</p>";
                break;
        }
    } else if (strcmp($_GET['id'], $_SESSION['userData']['idusers']) == 0) {
        include './views/details/partials/contentUsers.php';
    }
    if (isset($_SESSION['userData'])) {
        if (strcmp($_SESSION['userData']['idusers'], $_GET['id']) != 0) {
            if (!$user->isFriend($link, $_SESSION['userData']['idusers'])) {
?>
                <script src='js/addFriend.js'></script>
                <input type='button' value='Follow' class='bFriend' id=<?php echo '"'.$_GET['id'].'"'; ?> />
                <div id="li<?php echo $_GET['id']; ?>"></div>
<?php
            } else if ($user->isFriend($link, $_SESSION['userData']['idusers'])) {
?>
                <script src='js/delFriend.js'></script>
                <input class="bFriend" type='button' value="X" id=<?php echo '"'.$user->getIdusers().'"'; ?> />
                <div id="li<?php echo $_GET['id']; ?>"></div>
<?php  
            }
        }
    }
}
?>

