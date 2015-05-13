<?php

    session_start();
    
    if (isset($_POST)) {
        if ($_POST['type'] == 'logout') {
            session_unset();
            $_SESSION = array();
            session_destroy();
        }
    }

    include './views/head.php';
    include './models/functions.php';
    include './models/classes/Connection.php';
    
    $infoDb = getInfoDb();
    $link = new Connection($infoDb['host'], $infoDb['user'], $infoDb['pass'], $infoDb['db']);
    mysqli_select_db($link->getConnection(), 'cisadnetwork');
    
    include './controler/controler.php';
    
    include './views/upperWrapper.php';
    
    include $toInclude;
    
    if (isset($log)) {
        foreach ($log as $msg) {
            echo '<p>'.$msg.'</p>';
        }
        unset($log);
    }
    
    include './views/footerWrapper.php';
    include './views/bottom.php';

?>