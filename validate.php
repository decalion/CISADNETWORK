<?php


    include './models/classes/Connection.php';
    include './models/dbConnection.php';
    
    $infoDb = getInfoDb();
    $link = new Connection($infoDb['host'], $infoDb['user'], $infoDb['pass'], $infoDb['db']);
    mysqli_select_db($link->getConnection(), 'cisadnetwork');
    
    $query = 'select username, userKey, activeMail from users where userKey="'.$_GET['userKey'].'" and activemail=0';
    $result = $link->query($query);
    if ($result->num_rows != 0) {
        $query = 'update users set activemail = 1 where userKey="'.$_GET['userKey'].'" and activemail=0';
        if ($link->query($query)) {
            echo "The user ".$_GET['userKey']." was activated!";
        }
    } else {
        header("Location:index.php");
    }
    
    $link->closeConnection();

?>
