<?php

include './models/classes/Factory.php';

    function loadDefault($type, $link) {
        $factory = new Factory($type, $link);
        if ($type = 'recipes') {
            $factory->loadDefaultInfoRecipes();
        } else {
            $factory->loadDefaultInfo();
        }
    }
    
    function encrypt($password) {
        return sha1($password);
    }
    
    function createImg($url) {
        echo '<object data="./images/does-not-exist.png" type="image/png"><img src="./images/'.$url.'" /></object>';
    }
    
?>
