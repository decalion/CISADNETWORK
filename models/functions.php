<?php

include './models/classes/Factory.php';

    function loadDefault($type, $link) {
        $factory = new Factory($type, $link);
        $factory->loadDefaultInfo();
    }
    
    function loadDetail($type, $link) {
        $factory = new Factory($type, $link);
        echo $_GET['type']." ".$_GET['id'];
    }
    
    function encrypt($password) {
        return sha1($password);
    }
    
    function getDataByType($link, $type, $string) {
        $query = 'select * from '.$type.' like title = '.$string;
    }
    
?>
<?php

    include './models/classes/Factory.php';

    function loadDefault($type, $link) {
        $factory = new Factory($type, $link);
        $factory->loadDefaultInfo();
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

?>
