<?php

$movid = $_GET['action'];
$actid = $_GET['del'];

//echo "Test " . $movid . " :::: " . $actid;

$sql = "DELETE FROM authorsbooks WHERE idbooks=$movid AND idauthors=$actid";

$result = $facade->deletedData($sql);


if ($result) {

    $msg = "Book Modify succefuly";
} else {
    $msg = "Error to Modify Book";
}


include './views/bookspanel.php';
?>