<?php

$serieid = $_GET['action'];
$actid = $_GET['del'];

//echo "Test " . $movid . " :::: " . $actid;

$sql = "DELETE FROM chapters WHERE idseries=$serieid AND idchapters=$actid";

$result = $facade->deletedData($sql);


if ($result) {

    $msg = "Serie Modify succefuly";
} else {
    $msg = "Error to Modify Serie";
}


include './views/seriespanel.php';
?>