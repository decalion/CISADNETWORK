<?php

$serieid = $_GET['action'];
$actid = $_GET['del'];

//echo "Test " . $movid . " :::: " . $actid;

$sql = "DELETE FROM directorsseries WHERE idseries=$serieid AND iddirectors=$actid";

$result = $facade->deletedData($sql);


if ($result) {

    $msg = "Serie Modify succefuly";
} else {
    $msg = "Error to Serie Movie";
}


include './views/seriespanel.php';
?>