<?php

include './models/classes/Factory.php';

    function loadDefault($type, $link) {
        $factory = new Factory($type, $link);
        $factory->loadDefaultInfo();
    }
    
    function encrypt($password) {
        return sha1($password);
    }
    
    function createImg($url) {
        echo '<object data="./images/does-not-exist.png" type="image/png"><img src="./images/'.$url.'" /></object>';
    }
    
    function getDataByType($link, $type, $string) {
        $query = 'select * from '.$type.' like title = '.$string;
    }
    
?>
