<?php

    session_start();

    include './views/head.php';
    include './models/functions.php';
    include './models/classes/Connection.php';
    
    $infoDb = getInfoDb();
    $conn = new Connection($infoDb['host'], $infoDb['user'], $infoDb['pass'], $infoDb['db']);
    
    if (isset($_SESSION['userData'])) {
        include './views/upperWrapper.php';
    } else {
        include './views/noLogin/upperWrapper.php';
    }
    
    include './controler/controler.php';
    
    include './views/footerWrapper.php';
    include './views/bottom.php';

?>