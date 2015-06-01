<?php

/**
 * Controler for Delete Series
 */



$idserie=$_POST['idserie'];

$check=$facade->updateData("DELETE FROM series WHERE idseries=$idserie");


if($check==true){
    
    $msg="Serie Deleted Correct";
    
}else{
    
    $msg="Error to Deleted Serie";
    
}
$_POST=array();

include './views/seriespanel.php';


?>
