<?php

    include './models/classes/Factory.php';

    function loadDefault($type) {
        $factory = new Factory($type);
    }

?>