<?php

    /**
     * File to delete a friend
     */

    session_start();
    
    include './classes/Connection.php';
    include './dbConnection.php';
    include './functions.php';
    
    $infoDb = getInfoDb();
    $link = new Connection($infoDb['host'], $infoDb['user'], $infoDb['pass'], $infoDb['db']);
    mysqli_select_db($link->getConnection(), $infoDb['db']);
    
    $query = 'delete from friends where idusers = '.$_SESSION['userData']['idusers'].' and idusersfriends = '.$_GET['q'].';';
    $result = $link->query($query);
    if ($result) {
        echo 'The user '.getUsernameById($link, $_GET['q']).' was removed!';
    } else {
        echo 'There was an error!';
    }
    
    $link->closeConnection();

?>