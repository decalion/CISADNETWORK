<?php
/**
 * Controler for Change Movie Data
 */

$idserie=$_POST['idserie'];
$seriename=$_POST['seriename'];
$year=$_POST['year'];
$sinopsi=$_POST['sinopsi'];


$check=$facade->updateData("Update series Set idseries='$idserie',name='$seriename',sinopsi='$sinopsi',year=$year Where idseries=$idserie");


if($check==true){
    
    $msg="Serie $seriename change Correct";
    
}else{
    
    $msg="Error to Modify Serie $seriename";
    
}

$_POST=array();
include './views/seriespanel.php';





?>
