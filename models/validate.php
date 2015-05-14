<?php


    include './models/classes/Connection.php';
    include './models/dbConnection.php';
    
    $infoDb = getInfoDb();
    $link = new Connection($infoDb['host'], $infoDb['user'], $infoDb['pass'], $infoDb['db']);
    mysqli_select_db($link->getConnection(), 'cisadnetwork');
    
    $query = 'update users set activemail = 1 where userKey="'.$_GET['userKey'].'"';
    if ($link->query($query)) {
        echo "The user ".$_GET['userKey']." was activated!";
    } else {
        echo "There was an error!";
    }
    
    $link->closeConnection();

?>
