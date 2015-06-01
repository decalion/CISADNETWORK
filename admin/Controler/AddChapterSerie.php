<?php
/**
 * Controler For Add Chapters
 */
$idserie=$_POST['idserie'];
$name=$_POST['name'];
$seson=$_POST['season'];
$chapter=$_POST['chapter'];


//echo"Esto he un prueba $movie ::::: $actor";

$sql="INSERT INTO chapters (name, numberchapter, seasonnumber, idseries) VALUES ('$name',$chapter,$seson,$idserie)";

$result=$facade->addData($sql);


if($result){
    
    $msg="Chapter Add Succefuly";
}else{
    
    $msg="Error to Add Chapter";
    
}
include './views/seriespanel.php';


?>