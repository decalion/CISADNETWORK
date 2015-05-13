<?php

    include './models/classes/Factory.php';

    function loadDefault($type) {
        $factory = new Factory($type);
        $factory->loadDefaultInfo();
    }
    
    function getInfoDb() {
        return ['user' => 'root', 'pass' => 'daw', 'host' => 'localhost', 'db' => 'cisadnetwork'];
    }

    function encrypt($password) {
        return crypt($password);
    }
    
?>
