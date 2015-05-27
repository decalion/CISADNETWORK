<?php

    session_start();
    
    $ajax = true;
    
    include './classes/Connection.php';
    include './dbConnection.php';
    include './functions.php';
    
    $q = $_GET['q'];
    
    $infoDb = getInfoDb();
    $link = new Connection($infoDb['host'], $infoDb['user'], $infoDb['pass'], $infoDb['db']);
    mysqli_select_db($link->getConnection(), $infoDb['db']);

    if (userVoted($link)) {
        echo '<li><p>You already voted to this poll!</p></li>';
    } else {
        $query = 'insert into usersvotes values ("'.$_SESSION['userData']['lastPollId'].'", "'.$_SESSION['userData']['idusers'].'", "'.$q.'");';
        $result = $link->query($query);
        if ($result) {
            echo '<li><p>Thank for your vote!</p></li>';
        }
    }
    
    $link->closeConnection();
    
?>