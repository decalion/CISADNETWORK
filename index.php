<?php

    session_start();
    
    if (isset($_POST) && count($_POST) > 0) {
        if ($_POST['type'] == 'logout') {
            session_unset();
            $_SESSION = array();
            session_destroy();
        }
    }
    
    include './models/classes/Connection.php';
    include './models/dbConnection.php';
    
    $infoDb = getInfoDb();
    $link = new Connection($infoDb['host'], $infoDb['user'], $infoDb['pass'], $infoDb['db']);
    mysqli_select_db($link->getConnection(), 'cisadnetwork');

    include './views/head.php';
    
    include './models/functions.php';
    
    include './models/debug.php';
    
    //createDefault($link, 20);
    
    include './controler/controler.php';
    
    include './views/upperWrapper.php';
    
    include $toInclude;
    
    include './views/footerWrapper.php';
    include './views/bottom.php';
    
    $link->closeConnection();

?>

<div id="rajoy">
    <img src="images/rajoy.png" />
</div>
