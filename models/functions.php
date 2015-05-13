<?php

    include './models/classes/Factory.php';

    function loadDefault($type) {
        $factory = new Factory($type);
        $factory->loadDefaultInfo();
    }
    
    function encrypt($password) {
        return crypt($password);
    }
    
?>
