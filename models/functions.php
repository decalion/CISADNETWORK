<?php

    if (isset($ajax)) {
        include './classes/Factory.php';
    } else {
        include './models/classes/Factory.php';
    }
    
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
        if ($type === "users") {
            $field = "username";
        } else {
            $field = "name";
        }

        $query = 'select '.$field.' from ' . $type;
        $result = $link->query($query);
        $query = 'select ' . $field . ' from ' . $type . " limit 5;";
        if ($result) {
            while ($row = mysqli_fetch_array($result)) {
                $temp = $row[$field];
                array_push($rows, $temp);
            }
        }
        return $rows;
    }
    
?>
