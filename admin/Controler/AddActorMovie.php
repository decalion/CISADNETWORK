<?php
$movie=$_GET['action'];
$actor=$_GET['ad'];

//echo"Esto he un prueba $movie ::::: $actor";

$sql="INSERT INTO actorsmovies (idmovies,idactors) VALUES ($movie,$actor)";

$result=$facade->addData($sql);


if($result){
    
    $msg="Actor Add Succefuly";
}else{
    
    $msg="Error to Add Actor";
    
}

include './views/moviespanel.php';