<?php
/**
 * Controler for Add Serie
 */
$serie=$_GET['action'];
$director=$_GET['ad'];


$sql="INSERT INTO directorsseries (idseries,iddirectors) VALUES ($serie,$director)";

$result=$facade->addData($sql);


if($result){
    
    $msg="Director Add Succefuly";
}else{
    
    $msg="Error to Add Director";
    
}

include './views/seriespanel.php';


?>