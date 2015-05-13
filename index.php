<?php

    session_start();
    
    if (isset($_POST) && count($_POST) > 0) {
        if ($_POST['type'] == 'logout') {
            session_unset();
            $_SESSION = array();
            session_destroy();
        }
    }

    include './views/head.php';
    include './models/dbConnection.php';
    include './models/functions.php';
    include './models/classes/Connection.php';
    
    $infoDb = getInfoDb();
    $link = new Connection($infoDb['host'], $infoDb['user'], $infoDb['pass'], $infoDb['db']);
    mysqli_select_db($link->getConnection(), 'cisadnetwork');
    
    include './models/debug.php';
    
    createDefault($link, 20);
    
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
<!--
<div id="rajoy">
    <img src="images/rajoy.png" />
</div>
-->