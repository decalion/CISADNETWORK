<?php
/**
 * Controler For Delete Chapters
 */
$serieid = $_GET['action'];
$chapter = $_GET['deln'];
$season = $_GET['dels'];

//echo "Test " . $movid . " :::: " . $actid;

$sql = "DELETE FROM chapters WHERE idseries=$serieid AND numberchapter=$chapter AND  seasonnumber=$season";

$result = $facade->deletedData($sql);


if ($result) {

    $msg = "Serie Modify succefuly";
} else {
    $msg = "Error to Modify Serie";
}


include './views/seriespanel.php';
?>