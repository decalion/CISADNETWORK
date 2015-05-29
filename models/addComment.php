<?php

    session_start();
    
    $ajax = true;
    
    include './classes/Connection.php';
    include './dbConnection.php';
    include './functions.php';
    
    $infoDb = getInfoDb();
    $link = new Connection($infoDb['host'], $infoDb['user'], $infoDb['pass'], $infoDb['db']);
    mysqli_select_db($link->getConnection(), $infoDb['db']);

    $query = 'insert into comments'.$_POST['type'].' (id'.$_POST['type'].', idusers, date, comment) values ("'.$_POST['id'].'", "'.$_SESSION['userData']['idusers'].'", "2015-10-05", "'.$_POST['comment'].'");';
    $result = $link->query($query);
    if ($result) {
        ?>
            <div>
                <h4><a href="index.php?type=users&id=<?php echo $_SESSION['userData']['idusers']; ?>"><?php echo $_SESSION['userData']['username']; ?></a></h4>
                <p><?php echo $_POST['comment']; ?></p>
            </div>
        <?php
    } else {
        echo 'There was an error while processing the comment!';
    }
    
    $link->closeConnection();

?>
