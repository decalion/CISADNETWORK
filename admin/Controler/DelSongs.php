<?php

$idcd = $_GET['action'];
$idsong= $_GET['del'];


$sql = "DELETE FROM songs WHERE idsongs=$idsong AND idcds=$idcd";

$result = $facade->deletedData($sql);


if ($result) {

    $msg = "Song Delete succefuly";
} else {
    $msg = "Error to Delete Song";
}


include './views/musicpanel.php';
?>