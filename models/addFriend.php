<?php

    /**
     * Add a new friend from an AJAX query
     * @param GET $_GET Variable where you retrieves the data that you get
     * @return String If sucefully adding to db, returns a string
     * @return String If failed adding the friend it returns a string
     */

    session_start();

    $ajax = true;

    include './classes/Connection.php';
    include './dbConnection.php';
    include './functions.php';
    
    $infoDb = getInfoDb();
    $link = new Connection($infoDb['host'], $infoDb['user'], $infoDb['pass'], $infoDb['db']);
    mysqli_select_db($link->getConnection(), $infoDb['db']);
    
    if (!$_SESSION['userData']['idusers'] == $GET['q']) {
        $query = 'INSERT INTO friends (idusers, idusersfriends) VALUES ("' . $_SESSION['userData']['idusers'] . '","' . $_GET['q'] . '");';
        $result = $link->query($query);
        if ($result) {
            echo "You are now following this user!";
        } else {
            echo "Failed following this user or already following this user!";
        }
    } else {
        echo "You can't add yourself!";
    }

    $link->closeConnection();
    
?>