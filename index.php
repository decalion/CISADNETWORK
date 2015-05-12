<?php

    session_start();

    include './views/head.php';
    include './models/functions.php';
    
    if (isset($_SESSION['userData'])) {
        include './views/upperWrapper.php';
    } else {
        include './views/noLogin/upperWrapper.php';
    }
    
    include './controler/controler.php';
    
    include './views/footerWrapper.php';
    include './views/bottom.php';

?>