<?php
/**
 * Controler For Delete Series From Actors
 */
$serieid = $_GET['action'];
$actid = $_GET['del'];

//echo "Test " . $movid . " :::: " . $actid;

$sql = "DELETE FROM actorsseries WHERE idseries=$serieid AND idactors=$actid";

$result = $facade->deletedData($sql);


if ($result) {

    $msg = "Serie Modify succefuly";
} else {
    $msg = "Error to Modify Serie";
}


include './views/seriespanel.php';
?>