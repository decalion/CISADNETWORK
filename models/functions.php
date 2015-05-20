<?php

    include './models/classes/Factory.php';

    function loadDefault($type, $link) {
        $factory = new Factory($type, $link);
        $factory->loadDefaultInfo();
    }
    
    function loadDetail($type, $link) {
        $factory = new Factory($type, $link);
        return $factory->loadDetail($_GET['id']);
    }
    
    function encrypt($password) {
        return sha1($password);
    }
    
    function getDataByType($link, $type) {
        $rows = array();
        $query = 'select name from ' . $type ;// ' where name like "' . $string . '";';
        $result = $link->query($query);
        while ($row = mysqli_fetch_array($result)) {
            array_push($rows, $row);
        }
        return $rows;
    }
    
    function getNumMessages($link) {
        $query = 'select * from messages where receiver = "'.$_SESSION['userData']['idusers'].'" and readed = "0";';
        $result = $link->query($query);
        return $result->num_rows;
    }
    
?>
