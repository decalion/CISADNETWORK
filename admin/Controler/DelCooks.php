<?php

/**
 * Controler for DeleteUsers
 */



$idrecipes=$_POST['idcooks'];

$check=$facade->updateData("DELETE FROM recipes WHERE idrecipes=$idrecipes");


if($check==true){
    
    $msg="Recipe Deleted Correct";
    
}else{
    
    $msg="Error to Deleted Recipe";
    
}
$_POST=array();

include './views/cookspanel.php';


?>
