<?php
/**
 * Controler For Add Movie Directors
 */
$movie=$_GET['action'];
$director=$_GET['ad'];


$sql="INSERT INTO directorsmovies (idmovies,iddirectors) VALUES ($movie,$director)";

$result=$facade->addData($sql);


if($result){
    
    $msg="Director Add Succefuly";
}else{
    
    $msg="Error to Add Director";
    
}

include './views/moviespanel.php';


?>