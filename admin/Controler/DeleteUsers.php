<?php

/**
 * Controler for DeleteUsers
 */



$iduser=$_POST['iduser'];

$check=$facade->updateData("DELETE FROM users WHERE idusers=$iduser");


if($check==true){
    
    $msg="User Deleted Correct";
    
}else{
    
    $msg="Error to Deleted user";
    
}
$_POST=array();

include './views/userpanel.php';


?>

