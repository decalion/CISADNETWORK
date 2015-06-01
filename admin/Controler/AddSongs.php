<?php
/**
 * Controler For Add Songs
 */
$idgroup=$_POST['idmusic'];
$idcd=$_POST['idcds'];

$name=$_POST['name'];

//echo"Esto he un prueba $movie ::::: $actor";

$sql="INSERT INTO songs (idgroups,idcds,name) VALUES ($idgroup,$idcd,'$name')";

$result=$facade->addData($sql);


if($result){
    
    $msg="Song Add Succefuly";
}else{
    
    $msg="Error to Add Song";
    
}

include './views/musicpanel.php';