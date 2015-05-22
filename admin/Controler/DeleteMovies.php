<?php

/**
 * Controler for DeleteUsers
 */



$idmovie=$_POST['idmovie'];

$check=$facade->updateData("DELETE FROM movies WHERE idmovies=$idmovie");


if($check==true){
    
    $msg="Movie Deleted Correct";
    
}else{
    
    $msg="Error to Deleted Movie";
    
}
$_POST=array();

include './views/moviespanel.php';


?>
