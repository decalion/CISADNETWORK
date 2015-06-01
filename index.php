<?php

    /**
     * Firts page to be calle when you enter this website
     * 
     * @author Ismael Caballero Hernández <icaballerohernandez@gmail.com>
     * @author Cristian Bautista Peral <cristian.bautista@gencat.cat>
     * @author Adrian Garcia Manchado <adriangarciamanchado@gmail.com>
     * 
     * @license http://https://github.com/decalion/CISADNETWORK/blob/master/license MIT
     * @link cisadsystems.esy.es website of out company
     * @version Stable-0.1.0
     */

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
    mysqli_select_db($link->getConnection(), $infoDb['db']);

    include './views/head.php';
    
    include './models/functions.php';
    
    include './controler/controler.php';
    
    include './views/upperWrapper.php';
    
    include $toInclude;
    
    include './views/footerWrapper.php';
    include './views/bottom.php';
    
    $link->closeConnection();

?>
<!--
<div id="rajoy">
    <img src="images/rajoy.png" />
</div>
-->
