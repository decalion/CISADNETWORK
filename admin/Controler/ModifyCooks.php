<?php
/**
 * Controler for Change Cooks Data
 */

$idcooks=$_POST['idcooks'];
$cookname=$_POST['cookname'];
$desc=$_POST['desc'];

$check=$facade->updateData("Update recipes Set name='$cookname',description='$desc' Where idrecipes=$idcooks");


if($check==true){
    
    $msg="Recipe $cookname change Correct";
    
}else{
    
    $msg="Error to Modify Recipe $cookname";
    
}

$_POST=array();
include './views/cookspanel.php';





?>
