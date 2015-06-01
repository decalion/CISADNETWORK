<?php
/**
 * Controler For Delete CDS
 */
$idcd=$_GET['action'];
$idgroup=$_GET['del'];

$sql="DELETE FROM cds WHERE idgroups=$idgroup AND idcds=$idcd";

$result=$facade->deletedData($sql);

if ($result) {
    $msg = "CD Delete succefuly";
} else {
    $msg = "Error to Delete CD";
}

include './views/musicpanel.php';
?>