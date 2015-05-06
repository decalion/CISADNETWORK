<?php

    if (isset($_SESSION['userData'])) {
        include './views/indexLogged.php';
    } else {
        include './views/indexNoLogged.php';
    }

?>