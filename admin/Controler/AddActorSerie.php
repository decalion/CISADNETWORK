<?php
/**
 * Add Actor Serie
 */

$serie=$_GET['action'];
$actor=$_GET['ad'];

//echo"Esto he un prueba $movie ::::: $actor";

$sql="INSERT INTO actorsseries (idseries,idactors) VALUES ($serie,$actor)";

$result=$facade->addData($sql);


if($result){
    
    $msg="Actor Add Succefuly";
}else{
    
    $msg="Error to Add Actor";
    
}
include './views/seriespanel.php';


?>