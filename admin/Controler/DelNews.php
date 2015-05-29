<?php

/**
 * Controler for DeleteNews
 */



$idnews=$_POST['idnews'];

$check=$facade->updateData("DELETE FROM news WHERE idnews=$idnews");


if($check==true){
    
    $msg="News Deleted Correct";
    
}else{
    
    $msg="Error to Deleted News";
    
}
$_POST=array();

include './views/newspanel.php'
?>
