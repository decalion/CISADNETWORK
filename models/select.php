<?php

$ajax = true;

include './classes/Connection.php';
include './dbConnection.php';
include './functions.php';

$q = $_GET['q'];

$infoDb = getInfoDb();
$link = new Connection($infoDb['host'], $infoDb['user'], $infoDb['pass'], $infoDb['db']);
mysqli_select_db($link->getConnection(), 'cisadnetwork');

$table_names = array("movies", "books", "users", "recipes", "authors", "groups", "cds", "singers", "actors", "directors", "series", "news", "songs");

$i = 0;
if (strlen($q) !== 0) {
    foreach ($table_names as $table_name) {
        $query = 'select id' . $table_name . ', name from ' . $table_name;
        $result = $link->query($query);
        if ($result) {
            foreach ($result as $object) {
                if ($object !== null) {
                    $pos = strpos($object['name'], $q);
                    if ($pos !== false) {
                        if ($i < 3) {
                            echo '<li><a href="index.php?type='.$table_name.'&id='.$object['id'.$table_name].'"/>'.$object['name'].'</a></li>';
                        }
                        $i++;
                    }
                }
            }
        }
    }
}
if ($i > 3) {
    echo '<li><form action="./index.php" method="post">
                <input hidden type="text" name="type" value="search" />
                <input hidden type="text" id="userInputSearch" name="userInputSearch" value="'.$q.'""/>  
                <input type="submit" value="Show more..." />
            </form></li>';
}
$link->closeConnection();
?>