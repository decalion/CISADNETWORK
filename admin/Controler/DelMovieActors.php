<?php
/**
 * Controler For Delete Actors From Movies
 */
$movid = $_GET['action'];
$actid = $_GET['del'];

//echo "Test " . $movid . " :::: " . $actid;

$sql = "DELETE FROM actorsmovies WHERE idmovies=$movid AND idactors=$actid";

$result = $facade->deletedData($sql);


if ($result) {

    $msg = "Movie Modify succefuly";
} else {
    $msg = "Error to Modify Movie";
}


include './views/moviespanel.php';
?>