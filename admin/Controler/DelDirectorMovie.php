<?php

$movid = $_GET['action'];
$actid = $_GET['del'];

//echo "Test " . $movid . " :::: " . $actid;

$sql = "DELETE FROM directorsmovies WHERE idmovies=$movid AND iddirectors=$actid";

$result = $facade->deletedData($sql);


if ($result) {

    $msg = "Movie Modify succefuly";
} else {
    $msg = "Error to Modify Movie";
}


include './views/moviespanel.php';
?>