<?php

    session_start();
    
    if (isset($_POST)) {
        if ($_POST['type'] == 'logout') {
            session_destroy();
        }
    }

    include './views/head.php';
    include './models/functions.php';
    include './models/classes/Connection.php';
    
    $infoDb = getInfoDb();
    $link = new Connection($infoDb['host'], $infoDb['user'], $infoDb['pass'], $infoDb['db']);
    mysqli_select_db($link->getConnection(), 'cisadnetwork');
    
    if (isset($_SESSION['userData'])) {
        include './views/upperWrapper.php';
    } else {
        include './views/noLogin/upperWrapper.php';
    }
    
    include './controler/controler.php';
    
    include './views/footerWrapper.php';
    include './views/bottom.php';

?>