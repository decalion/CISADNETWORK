<?php
/**
 * Controler for Change Movie Data
 */

$idmovier=$_POST['idmovie'];
$moviename=$_POST['moviename'];
$year=$_POST['year'];
$sinopsi=$_POST['sinopsi'];


$check=$facade->updateData("Update movies Set idmovies='$idmovier',name='$moviename',sinopsi='$sinopsi',year=$year Where idmovies=$idmovier");


if($check==true){
    
    $msg="Movie $moviename change Correct";
    
}else{
    
    $msg="Error to Modify Movie $moviename";
    
}

$_POST=array();
include './views/moviespanel.php';





?>
